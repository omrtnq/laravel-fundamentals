<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'hello';
    }

    public function show()
    {
        $data = array(
            'id' => '1',
            'name' => 'Luna',
            'age' => '29',
            'email' => 'luna@gmail.com'
        );
        return $data;
    }
}
