<?php

namespace Banckle\Crm\Facades;

use Illuminate\Support\Facades\Facade;

class CRM extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'banckle';
    }  
}