<?php

    require 'core/database/Connection.php';
    require 'core/database/QueryBuilder.php';
    require 'core/Router.php';
    require 'core/Request.php';

    $config = require 'config.php';
    $pdo = Connection::make($config);
    return new QueryBuilder($pdo);
?>