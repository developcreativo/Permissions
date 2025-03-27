<?php

namespace Developcreativo\Permissions\Nova\Actions;

use Spatie\Permission\Models\Permission;
use Brightspot\Nova\Tools\DetachedActions\DetachedAction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Laravel\Nova\Fields\ActionFields;
use League\Csv\Writer;

class ExportPermissionCsvAction extends DetachedAction
{
    public function label()
    {
        return __('Export permissions');
    }

    public function name()
    {
        return __('Export permissions');
    }

    public function handle(ActionFields $fields)
    {
        $trans = __('Permissions');
        $now              = now()->format('U');
        $fileName         = "tmp/$trans-$now.csv";
        $storageInstance  = Storage::disk('reportes');
        $putFileOnStorage = $storageInstance->put($fileName, '');
        $fileContent      = $storageInstance->get($fileName);

        $query = Permission::query();

        $headers = [
            0 => [
                'Id',
                __('Name'),
                __('Guard Name'),
                __('Group'),
                __('Created at'),
                __('Updated at'),
            ]
        ];

        $records = $query->get();
        $records = collect($records)->map(function ($x) {
            return (array)[
                $x->id,
                $x->name,
                $x->guard_name,
                $x->group ?? '',
                $x->created_at,
                $x->updated_at,
            ];
        })->toArray();

        if (count($records) > 99000) {
            return DetachedAction::danger(__('The query is larger than 99000 records. Please narrow your filters'));
        }

        header('Content-Type: text/html; charset=utf-8');
        $writer = Writer::createFromString($fileContent, 'w');
        $writer->insertAll($headers);
        $writer->insertAll($records);

        $csvContent = mb_convert_encoding($writer->getContent(), 'ISO-8859-1', 'UTF-8');
        $putFileOnStorage = $storageInstance->put($fileName, $csvContent, 'public');
        $uploadedFileUrl  = $storageInstance->url($fileName, Carbon::now()->addMinutes(1));

        return DetachedAction::redirect($uploadedFileUrl);
    }

    public function fields()
    {
        return [];
    }
}
