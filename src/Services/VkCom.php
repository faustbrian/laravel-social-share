<?php

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
