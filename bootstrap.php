<?php

    require 'database/Connection.php';
    require 'database/QueryBuilder.php';

    $config = require 'config.php';
    $pdo = Connection::make($config);
    return new QueryBuilder($pdo);
?>