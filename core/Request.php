<?php

namespace Core;


class Request
{
    public static function url()
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $pathQuery = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY );
        //dump($pathQuery, $path);
        return trim($path, '/');
    }
}