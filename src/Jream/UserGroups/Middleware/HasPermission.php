<?php

namespace Jream\UserGroups\Middleware;

use Closure;

class HasPermission
{
    /**
     * Check if user has requested route permissions.
     *
     * @return bool
     */
    protected function hasPermission()
    {
        $request = $this->request;
        $do = $this->getAction('can');
        return ! $this->forbiddenRoute() && $request->user()->can($do);
    }

    protected function protectMethods()
    {
    }

    /**
     * Check if current route is hidden to current user role.
     *
     * @return bool
     */
    protected function forbiddenRoute()
    {
        return false;
    }
}
