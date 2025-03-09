<?php

namespace Luinuxscl\OptionPackage\Facades;

use Illuminate\Support\Facades\Facade;

class Option extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'option';
    }
}
