<?php

class PageController
{
    public function home()
    {
        $tasks = App::get('database')->selectAll('todos');
        $users = App::get('database')->selectAll('user_test');
        require 'views/index.view.php';
    }

    public function about()
    {
        require 'views/about.view.php';
    }

    public function contact()
    {
        $name = "laracast";
        require 'views/contact.view.php';
    }
}