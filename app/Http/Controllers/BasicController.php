<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function home(){
    	return view('welcome');
    }
    public function getRegister(){
    	 return view('signup');
    }
}
