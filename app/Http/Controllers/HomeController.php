<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        $message = "Welcome to Educative";

        $title = "Educative";

        return view('welcome', compact('message', 'title'));
    }
}
