<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RashinaContactController extends Controller
{
    public function contact(){
    	return view('rashina.contact');
    }
}
