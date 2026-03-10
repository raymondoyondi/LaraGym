<?php

namespace App;


class CacheKey
{
    /**
     * @return string
     */
    public static function get()
    {
        return md5(request()->getUri());
    }
}
