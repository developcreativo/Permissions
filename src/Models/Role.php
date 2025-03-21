<?php
/*
 * Copyright (c) 2023.  FaceIt
 * @author Kelly Salazar <developmentcreativo@gmail.com>
 */

namespace Developcreativo\Permissions\Models;

use Developcreativo\Permissions\Traits\SupportsRole;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Permission\Models\Permission;

class Role extends \Spatie\Permission\Models\Role
{
    use SupportsRole;
    use LogsActivity;

    public $timestamps = true;
    protected static function boot()
    {
        parent::boot();
        static::updating( function ($model) {
            $model->updated_at = now();
        });


        static::saved( function ($model) {
            $model->updated_at = now();
        });
    }
}