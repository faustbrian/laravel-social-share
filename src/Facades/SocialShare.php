<?php



declare(strict_types=1);

namespace BrianFaust\SocialShare\Facades;

use Illuminate\Support\Facades\Facade;

class SocialShare extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'social-share';
    }
}
