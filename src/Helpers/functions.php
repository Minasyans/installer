<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

if (! function_exists('isActive')) {
    /**
     * Set the active class to the current opened menu.
     *
     * @param  string|array $route
     * @param string $className
     * @return string
     */
    function isActive($route, string $className = 'bg-green-500')
    {
        if (is_array($route)) {
            return in_array(Route::currentRouteName(), $route) ? $className : '';
        }
        if (Route::currentRouteName() == $route) {
            return $className;
        } else {
            return 'bg-white';
        }

        if (strpos(URL::current(), $route)) {
            return $className;
        }
    }
}

if (! function_exists('iconIsActive')) {
    /**
     * Set the active class to the current icon.
     *
     * @param  string|array $route
     * @param string $className
     * @return string
     */
    function iconIsActive($route, string $className = 'text-white')
    {
        if (is_array($route)) {
            return in_array(Route::currentRouteName(), $route) ? $className : '';
        }
        if (Route::currentRouteName() == $route) {
            return $className;
        } else {
            return 'text-gray-600';
        }

        if (strpos(URL::current(), $route)) {
            return $className;
        }
    }
}
