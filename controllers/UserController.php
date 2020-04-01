<?php

namespace App\Controllers;

use App\Core\App;

class UserController
{
    public function index()
    {
        $users = App::get('database')->selectAll('user_test');
        return view('users', compact('users'));
    }

    public function store()
    {
        App::get('database')->insert('user_test', [
            'name' => $_POST['name'],
            'email' => "sa@gs.com",
        ]);
        return redirect('users');
    }
}