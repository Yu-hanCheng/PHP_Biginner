<?php

App::get('database')->insert('user_test', [
    'name' => $_POST['name'],
    'email' => "sa@gs.com",
    // 'ema' => "sa@gs.com", // TEST exception
]);

header("Location: /");