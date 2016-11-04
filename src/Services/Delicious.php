<?php

namespace BrianFaust\SocialShare\Services;

class Delicious extends Service
{
    public static function getUrl()
    {
        return 'http://www.digg.com/submit?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'url' => $link,
            'title' => $text,
        ];
    }
}
