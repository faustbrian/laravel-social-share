<?php



declare(strict_types=1);

namespace BrianFaust\SocialShare\Services;

class Springpad extends Service
{
    public static function getUrl()
    {
        return 'https://springpadit.com/s?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'url'  => $link,
            'name' => $text,
            'type' => 'lifemanagr.Bookmark',
        ];
    }
}
