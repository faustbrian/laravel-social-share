<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Social Share.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\SocialShare\Facades;

use Illuminate\Support\Facades\Facade;

class SocialShare extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'social-share';
    }
}
