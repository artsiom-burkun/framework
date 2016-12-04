<?php

namespace App;

class Controller
{
    protected $app;
    
    public function __construct()
    {
        global $app;
        $this->app = $app;
    }
}