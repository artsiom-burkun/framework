<?php
use Core\Database\Connector;
use Core\Database\QueryBuilder;

require "vendor/autoload.php";

$app = [];

$app['config'] = require "config.php";



$app['query'] =  new QueryBuilder(Connector::create($app['config']['database']));