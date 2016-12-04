<?php

$router->get('', 'PageController@index');
$router->get('task/remove', 'PageController@remove');
$router->get('task/update', 'PageController@update');
$router->post('add', 'PageController@add');

$router->get('news', 'News\IndexController@index');
$router->get('test', 'TestController@index');