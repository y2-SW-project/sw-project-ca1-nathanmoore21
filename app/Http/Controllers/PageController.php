<?php

namespace App\Http\Controllers;

//controller containts the loggic - how to validate data and save to the database through the model

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }
}
