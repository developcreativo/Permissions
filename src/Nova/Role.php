<?php
/*
 * Copyright (c) 2023.  FaceIt
 * @author Kelly Salazar <developmentcreativo@gmail.com>
 */

namespace Developcreativo\Permissions\Nova;

use Developcreativo\Permissions\Checkboxes;
use Developcreativo\Permissions\Nova\Actions\DuplicateAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphToMany;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Spatie\Permission\PermissionRegistrar;
use Laravel\Nova\Fields\Hidden;
class Role extends Resource
{

    public static $hiddenFields = [];

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \Developcreativo\Permissions\Models\Role::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
    ];

    /**
     * Get the logical group associated with the resource.
     *
     * @return string
     */
    public static function group()
    {
        return __('Roles & Permisos');
    }

    /**
     * Determine if this resource is available for navigation.
     *
     * @param Request $request
     * @return bool
     */
    public static function availableForNavigation(Request $request)
    {
        return Gate::allows('viewAny', app(PermissionRegistrar::class)->getRoleClass());
    }

    public static function label()
    {
        return __('Roles');
    }

    public static function singularLabel()
    {
        return __('Roles');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        $guardOptions = $this->guardOptions($request);
        $userResource = $this->userResource();

        return [
            ID::make(__('ID'), 'id')
                ->rules('required')
                ->canSee(function ($request) {
                    return $this->fieldAvailable('id');
                }),

            Text::make(__('Name'), 'name')
                ->rules(['required', 'string', 'max:255'])
                ->creationRules('unique:' . config('permission.table_names.roles'))
                ->updateRules('unique:' . config('permission.table_names.roles') . ',name,{{resourceId}}'),

            Select::make(__('Guard Name'), 'guard_name')
                ->options($guardOptions->toArray())
                ->rules(['required', Rule::in($guardOptions)])
                ->canSee(function ($request) {
                    return $this->fieldAvailable('guard_name');
                })
                ->default($this->defaultGuard($guardOptions)),

            DateTime::make(__('Fecha de creación'), 'created_at')->exceptOnForms(),
            DateTime::make(__('Fecha de actualización'), 'updated_at')->exceptOnForms(),
            Hidden::make('updated_at')->default(now()),

            Checkboxes::make(__('Permissions'), 'permissions')
                ->withGroups()
                ->options($this->loadPermissions()->map(function ($permission, $key) {
                    return [
                        'group'  => __(ucfirst($permission->group)),
                        'option' => $permission->name,
                        'label'  => __($permission->name),
                    ];
                })
                    ->groupBy('group')->toArray()),

            Text::make(__('Users'), function () {
                return $this->users()->count();
            })->exceptOnForms(),


            MorphToMany::make($userResource::label(), 'users', $userResource)
                ->searchable()
                ->singularLabel($userResource::singularLabel())
                ->canSee(function ($request) {
                    return $this->fieldAvailable('users');
                }),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            // (new DuplicateAction())->canSee(function () {
            //     return true;
            // })->withoutActionEvents(),
        ];
    }


    /**
     * Load all permissions
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    protected function loadPermissions()
    {
        /** @var class-string */
        $permissionClass = config('permission.models.permission');

        return $permissionClass::all()->unique('name');
    }
}