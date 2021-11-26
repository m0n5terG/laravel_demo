<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index($name) {
        return view('welcome', [
            'name' => $name
        ]);
    }

    public function readParam($name) {
        return "<h1>Hello $name</h1>";
    }
}
