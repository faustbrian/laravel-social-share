<?php



declare(strict_types=1);

namespace BrianFaust\SocialShare\Services;

class GooglePlus extends Service
{
    public static function getUrl()
    {
        return 'https://plus.google.com/share?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'url' => $link,
        ];
    }
}
