<?php
// packages/fsi/collabo/src/Facades/CollaboFacade.php
namespace Fsi\Collabo\Facades;

use Illuminate\Support\Facades\Facade;

class CollaboFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'collabo';
    }
}