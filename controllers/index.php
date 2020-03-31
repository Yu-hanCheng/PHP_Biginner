<?php

$tasks = App::get('database')->selectAll('todos');
$users = App::get('database')->selectAll('user_test');
require 'views/index.view.php';