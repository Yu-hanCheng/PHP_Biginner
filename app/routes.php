<?php
    $router->get('', 'PageController@home');
    $router->get('about', 'PageController@about');
    $router->get('about-contact', 'PageController@contact');
    $router->post('users', 'UserController@store');

    $router->get('users', 'UserController@index');