<?php

/*
 * This file is part of Laravel Social Share.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
