<?php
    $router->get('', 'PageController@home');
    $router->get('about', 'PageController@about');
    $router->get('about-contact', 'PageController@contact');
    // $router->post('names', 'controllers/add-name.php');