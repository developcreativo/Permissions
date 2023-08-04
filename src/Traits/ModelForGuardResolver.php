<?php
/*
 * Copyright (c) 2023.  FaceIt
 * @author Kelly Salazar <developmentcreativo@gmail.com>
 */

namespace Developcreativo\Permissions\Traits;

use Developcreativo\Permissions\ModelForGuardState;

trait ModelForGuardResolver {

    /**
     * Determines the guard model class
     *
     * @return class-string
     */
    public function modelForGuard()
    {
        return ModelForGuardState::$resolveModelForGuardCallback
            ? call_user_func(ModelForGuardState::$resolveModelForGuardCallback)
            : getModelForGuard($this->guard_name);
    }
}