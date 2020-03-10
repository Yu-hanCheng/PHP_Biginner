<?php

    require 'database/Connection.php';
    require 'database/QueryBuilder.php';

    $pdo = Connection::make();

    $query = new QueryBuilder($pdo);

    $tasks = $query->selectAll('todos'); 

    var_dump($tasks);
    require 'index.view.php';