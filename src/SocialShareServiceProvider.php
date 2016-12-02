<?php

/*
 * This file is part of Laravel Social Share.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\SocialShare;

use BrianFaust\ServiceProvider\ServiceProvider;

class SocialShareServiceProvider extends ServiceProvider
{
    public function register()
    {
        parent::register();

        $this->app->singleton('social-share', function () {
            return new Share();
        });
    }

    public function provides()
    {
        return array_merge(parent::provides(), ['social-share']);
    }

    public function getPackageName()
    {
        return 'social-share';
    }
}
