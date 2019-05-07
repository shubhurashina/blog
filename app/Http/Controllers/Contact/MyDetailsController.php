<?php

namespace App\Http\Controllers\Contact;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyDetailsController extends Controller
{
  	public function myDetails(){
  		return view('contact.myDetails');
  	}
}
