<?php

namespace App;

use Core\App;
use Core\Database\Connector;
use Core\Database\QueryBuilder;

class TestController
{
    // надо позвонить @mike => <a href="http://twitter.com/mike">@mike</a>
    public function index()
    {
        $str = 'Hello visit my site http://site.com';
        $re = '#((?:ht|f)tps?://([^.]+)\.[a-z]{2,5})#';
        $subst = '<a href="$1">$2</a>';

        dump(
            preg_replace($re, $subst, $str)
        );
    }
}