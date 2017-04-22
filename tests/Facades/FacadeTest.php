<?php



declare(strict_types=1);

namespace BrianFaust\Tests\SocialShare\Facades;

use BrianFaust\SocialShare\Share;
use BrianFaust\Tests\SocialShare\AbstractTestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;

class FacadeTest extends AbstractTestCase
{
    use FacadeTrait;

    protected function getFacadeAccessor()
    {
        return 'social-share';
    }

    protected function getFacadeClass()
    {
        return \BrianFaust\SocialShare\Facades\SocialShare::class;
    }

    protected function getFacadeRoot()
    {
        return Share::class;
    }
}
