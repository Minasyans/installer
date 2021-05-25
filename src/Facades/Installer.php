<?php

namespace Minasyans\Installer\Facades;

use Illuminate\Support\Facades\Facade;

class Installer extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'installer';
    }
}
