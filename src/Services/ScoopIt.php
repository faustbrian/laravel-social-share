<?php

namespace BrianFaust\SocialShare\Services;

class ScoopIt extends Service
{
    public static function getUrl()
    {
        return 'http://www.scoop.it/oexchange/share?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'url' => $link,
            'title' => $text,
        ];
    }
}
