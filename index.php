<?php

use Core\Request;
use Core\Router;

require "Core/bootstrap.php";

require Router::init('router')->load(Request::url());