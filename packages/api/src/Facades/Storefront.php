<?php

namespace Lunar\Api\Facades;

use Illuminate\Support\Facades\Facade;

class Storefront extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'storefront-api';
    }
}
