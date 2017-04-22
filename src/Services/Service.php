<?php



declare(strict_types=1);

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
