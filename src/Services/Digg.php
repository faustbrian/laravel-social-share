<?php

namespace BrianFaust\SocialShare\Services;

class Digg extends Service
{
    public static function getUrl()
    {
        return 'https://delicious.com/post?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'url' => $link,
            'title' => $text,
        ];
    }
}
