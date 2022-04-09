<?php

namespace App\Http\Controllers\Admin;

//controller containts the loggic - how to validate data and save to the database through the model

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{

    /**
     * 
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    /**
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */

     //controller (the logic) calls admin.home
    public function index()
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');
        return view('admin.home');
    }
}
