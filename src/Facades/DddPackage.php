<?php

namespace Bigtechlabs\DddPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bigtechlabs\DddPackage\DddPackage
 */
class DddPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Bigtechlabs\DddPackage\DddPackage::class;
    }
}
