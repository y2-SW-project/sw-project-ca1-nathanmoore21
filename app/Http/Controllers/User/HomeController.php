<?php

namespace App\Http\Controllers\User;

//controller containts the loggic - how to validate data and save to the database through the model

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * 
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:user');
    }

    /**
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('user.home');
    }
}
