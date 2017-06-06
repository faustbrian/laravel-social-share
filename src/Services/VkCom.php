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

class VkCom extends Service
{
    public static function getUrl()
    {
        return 'http://vk.com/share.php?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'url' => $link,
            'image' => $media,
            'title' => $text,
            'noparse' => 'false',
        ];
    }
}
