<?php

$tasks = $app['database']->selectAll('todos');
$users = $app['database']->selectAll('user_test');
require 'views/index.view.php';