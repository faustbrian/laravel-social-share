<?php

/*
 * This file is part of Laravel Social Share.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\SocialShare\Facades;

use BrianFaust\SocialShare\Share;
use GrahamCampbell\TestBenchCore\FacadeTrait;
use BrianFaust\Tests\SocialShare\AbstractTestCase;

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
