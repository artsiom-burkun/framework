<?php

use Core\Request;
use Core\Router;

require "Core/bootstrap.php";

Router::init('router')->load(Request::url());