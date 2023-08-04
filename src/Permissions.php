<?php

namespace Developcreativo\Permissions;

use Developcreativo\Permissions\Nova\Permission;
use Developcreativo\Permissions\Nova\Role;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class Permissions extends Tool
{
    public $permissionResource = Permission::class;
    protected $roleResource = Role::class;

    private $customRole = false;

    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::resources([
            $this->roleResource,
            $this->permissionResource,
        ]);
        Nova::script('permissions', __DIR__.'/../dist/js/tool.js');
        Nova::style('permissions', __DIR__.'/../dist/css/tool.css');

    }

    /**
     * @param string $roleResource
     *
     * @return mixed
     */
    public function roleResource($resourceClass)
    {
        $this->roleResource = $resourceClass;
        return $this;
    }

    public function permissionResource($resourceClass)
    {
        $this->permissionResource = $resourceClass;
        return $this;
    }
}
