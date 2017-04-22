<?php



declare(strict_types=1);

namespace BrianFaust\SocialShare\Services;

class Evernote extends Service
{
    public static function getUrl()
    {
        return 'http://www.evernote.com/clip.action?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'url'   => $link,
            'title' => $text,
        ];
    }
}
