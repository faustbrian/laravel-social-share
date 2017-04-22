<?php



declare(strict_types=1);

namespace BrianFaust\SocialShare\Services;

class Tumblr extends Service
{
    public static function getUrl()
    {
        return 'http://www.tumblr.com/share?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'u' => $link,
            't' => $text,
            'v' => 3,
        ];
    }
}
