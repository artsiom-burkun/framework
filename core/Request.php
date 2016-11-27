<?php

namespace Core;


class Request
{
    public static function url()
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
        return trim($path, '/');
    }
}