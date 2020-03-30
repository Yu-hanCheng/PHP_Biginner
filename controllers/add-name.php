<?php

$app['database']->insert('user_test', [
    'name' => $_POST['name'],
    'email' => "sa@gs.com"
]);