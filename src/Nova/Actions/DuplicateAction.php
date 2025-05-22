<?php

namespace Developcreativo\Permissions\Nova\Actions;

use App\AccessScope;
use App\Scope;
use Developcreativo\Permissions\Models\Role;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Fields\Text;

class DuplicateAction extends Action
{
    use InteractsWithQueue, Queueable;

    public function name()
    {
        return __('Duplicar Rol');
    }

    public function handle(ActionFields $fields, Collection $models)
    {
        foreach ($models as $model) {
            $role = Role::query()->find($model->id);

            $permissions = $role->permissions;

            // $scope = Scope::query()->where('rol_id', $role->id)->first();

            $role_created = Role::query()->create([
                'name' => $fields->name
            ]);

            $role_created->syncPermissions($permissions->pluck('name')->toArray());

            // if (!empty($scope)) {
            //     $new_scope = Scope::create([
            //         'rol_id' => $role_created->id,
            //         'tipo_scope' => $scope->tipo_scope,
            //         'nombre' => isset($fields->nombre) ? $fields->nombre :  $scope->nombre,
            //     ]);
            //     $access_scope = AccessScope::query()->where('scope_id', $scope->id)->get();
            //     $access_list = [];
            //     if (!empty($access_scope)) {
            //         foreach ($access_scope as $access) {
            //             $access_list[] = [
            //                 'nombre' => $access->nombre,
            //                 'scope_id' => $new_scope->id,
            //                 'cliente_id' => $access->cliente_id,
            //                 'pais_id' => $access->pais_id,
            //                 'ubicacion_id' => $access->ubicacion_id,
            //             ];
            //         }

            //         AccessScope::create($access_list);
            //     }
            // }
        }

        return Action::message(__('Status has been successfully updated!'));
    }

    public function fields() {
        return [
            Text::make(__('Role'), 'name')
                ->rules(['required', 'string', 'max:255'])
                ->creationRules('unique:' . config('permission.table_names.roles'))
                ->updateRules('unique:' . config('permission.table_names.roles') . ',name,{{resourceId}}'),

            Text::make(__('Scope Name'), 'nombre')->creationRules('unique:' . 'scopes')
        ];
    }
}