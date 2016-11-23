<?php

/*
 * This file is part of Laravel Social Share.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\SocialShare\Facades;

use Illuminate\Support\Facades\Facade;

class SocialShare extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'social-share';
    }
}
