<?php

namespace App\Controllers;

use App\Core\App;

class PageController
{
    public function home()
    {
        $tasks = App::get('database')->selectAll('todos');
        $users = App::get('database')->selectAll('user_test');
        return view('index', ['tasks' => $tasks, 'users' => $users]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        $name = "laracast";
        return view('contact');
    }
}