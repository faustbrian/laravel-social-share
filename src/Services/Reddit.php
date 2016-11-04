<?php

namespace BrianFaust\SocialShare\Services;

class Reddit extends Service
{
    public static function getUrl()
    {
        return 'http://www.reddit.com/submit?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'url' => $link,
            'title' => $text,
        ];
    }
}
