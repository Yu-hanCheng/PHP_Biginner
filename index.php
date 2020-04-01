<?php

require 'vendor/autoload.php';
$database = require 'core/bootstrap.php';

use App\Core\{Router, Request};

Router::load('routes.php')->direct(Request::uri(), Request::method());