<?php


declare(strict_types=1);

/*
 * This file is part of Laravel Social Share.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\SocialShare\Services;

abstract class Service
{
    public static function getSchema($link, $text = null, $media = null)
    {
        $query = urldecode(http_build_query(
            static::getFields($link, $text, $media)
        ));

        return static::getUrl().$query;
    }

    abstract public static function getUrl();

    abstract public static function getFields($link, $text, $media);
}
