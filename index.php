<?php

    $greeting = "HELLO";
    $names = [
        'zoe',
        'sarah',
        'jenny'
    ];

    $person = [
        'age' => 30,
        'hair' => 'black',
        'career' => 'backend developer'
    ];


    echo '<pre>';
    var_dump($person);
    echo '</pre>';
    die();

    require 'index.view.php';