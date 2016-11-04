<?php

namespace BrianFaust\SocialShare\Facades;

use Illuminate\Support\Facades\Facade;

class SocialShare extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'social-share';
    }
}
