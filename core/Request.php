<?php

namespace Core;


class Request
{
    public static function url()
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
        return trim($path, '/');
    }

    public static function isPost()
    {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    public static function back()
    {
        $url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/';
        header('Location: ' . $url);
    }
}