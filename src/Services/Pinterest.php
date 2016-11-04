<?php

namespace BrianFaust\SocialShare\Services;

class Pinterest extends Service
{
    public static function getUrl()
    {
        return 'http://pinterest.com/pin/create/button/?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'url' => $link,
            'media' => $text,
            'description' => $text,
        ];
    }
}
