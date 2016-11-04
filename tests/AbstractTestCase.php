<?php

namespace BrianFaust\Tests\SocialShare;

use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    protected function getServiceProviderClass($app)
    {
        return \BrianFaust\SocialShare\ServiceProvider::class;
    }
}
