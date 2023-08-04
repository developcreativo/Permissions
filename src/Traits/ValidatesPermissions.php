<?php
/*
 * Copyright (c) 2023.  FaceIt
 * @author Kelly Salazar <developmentcreativo@gmail.com>
 */

namespace Developcreativo\Permissions\Traits;

trait ValidatesPermissions
{
    protected function nobodyHasAccess($permission)
    {
        if (! $requestedPermission = Permission::find($permission)) {
            return true;
        }

        return ! $requestedPermission->hasUsers();
    }
}