<?php

namespace BrianFaust\SocialShare;

class ServiceProvider extends \BrianFaust\ServiceProvider\ServiceProvider
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
