<?php

$tasks = $app['query']->selectAll('tasks');


require "Views/index.view.php";