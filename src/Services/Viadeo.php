<?php

namespace BrianFaust\SocialShare\Services;

class Viadeo extends Service
{
    public static function getUrl()
    {
        return 'http://www.viadeo.com/?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'url' => $link,
            'title' => $text,
        ];
    }
}
