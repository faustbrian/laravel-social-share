<?php



declare(strict_types=1);

namespace BrianFaust\SocialShare;

use BrianFaust\ServiceProvider\AbstractServiceProvider;

class SocialShareServiceProvider extends AbstractServiceProvider
{
    public function register(): void
    {
        parent::register();

        $this->app->singleton('social-share', function () {
            return new Share();
        });
    }

    public function provides(): array
    {
        return array_merge(parent::provides(), ['social-share']);
    }

    public function getPackageName(): string
    {
        return 'social-share';
    }
}
