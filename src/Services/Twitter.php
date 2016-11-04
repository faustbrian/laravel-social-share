<?php

namespace BrianFaust\SocialShare\Services;

class Twitter extends Service
{
    public static function getUrl()
    {
        return 'https://twitter.com/intent/tweet?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'url' => $link,
            'text' => $text,
        ];
    }
}
