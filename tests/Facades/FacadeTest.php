<?php

namespace BrianFaust\Tests\SocialShare\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use BrianFaust\Tests\SocialShare\AbstractTestCase;
use BrianFaust\SocialShare\Share;

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
