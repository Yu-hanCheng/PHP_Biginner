<?php

    $query = require 'bootstrap.php';
    
    $tasks = $query->selectAll('todos','Task'); 

    var_dump($tasks);
    require 'index.view.php';