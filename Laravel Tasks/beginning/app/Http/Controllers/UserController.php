<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function test(){
        return 'Hello, test controller';
    }
    public function create(){
        return view('test_controller.create');
    }
    public function update(){
        return view('test_controller.update');
    }
}
