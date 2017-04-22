<?php



declare(strict_types=1);

namespace BrianFaust\SocialShare\Services;

class Facebook extends Service
{
    public static function getUrl()
    {
        return 'https://www.facebook.com/sharer/sharer.php?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'u'     => $link,
            'title' => $text,
        ];
    }
}
