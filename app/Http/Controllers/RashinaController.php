<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RashinaController extends Controller
{
    public function index(){
    	return view('welcome');
    }

    public function name(){
    	return view('rashina.name');
    }
}
