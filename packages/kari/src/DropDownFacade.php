<?php

namespace Kari\DropDown;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kari\DropDown\Skeleton\SkeletonClass
 */
class DropDownFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'drop-down';
    }
}
