<?php



declare(strict_types=1);

namespace BrianFaust\SocialShare\Services;

class Gmail extends Service
{
    public static function getUrl()
    {
        return 'https://mail.google.com/mail/?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'u'    => $link,
            'body' => $text,
            'view' => 'cm',
            'fs'   => '1',
            'to'   => null,
            'ui'   => '2',
            'tf'   => '1',
        ];
    }
}
