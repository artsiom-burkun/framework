<?php
use Core\App;
use Core\Database\Connector;
use Core\Database\QueryBuilder;

require "vendor/autoload.php";

App::set('config', require "config.php");



App::set('query', new QueryBuilder(Connector::create(App::get('config')['database'])));