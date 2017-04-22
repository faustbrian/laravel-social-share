<?php



declare(strict_types=1);

namespace BrianFaust\SocialShare\Services;

class LinkedIn extends Service
{
    public static function getUrl()
    {
        return 'http://www.linkedin.com/shareArticle?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'url'   => $link,
            'title' => $text,
            'mini'  => 'true',
        ];
    }
}
