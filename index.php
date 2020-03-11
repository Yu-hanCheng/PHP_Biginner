<?php

    $query = require 'bootstrap.php';
    
    $routes = [
        '' => 'controllers/index.php',
        'about' => 'controllers/about.php'
    ];
    require 'index.view.php';