<?php

namespace App\Http\Controllers\Address;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    public function index(){
    	return view('address.address');
    }

    public function address(){
    	return view('address.addressDetail');
    }
}
