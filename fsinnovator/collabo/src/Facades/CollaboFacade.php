<?php

namespace Fsinnovator\Collabo\Facades;

use Illuminate\Support\Facades\Facade;

class CollaboFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'collabo';
    }
}