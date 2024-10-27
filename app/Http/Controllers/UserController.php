<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    

    public function login(){

     	return view('administration.login');
    }

    public function compte(){

    	return view('administration.account');
    }


}
