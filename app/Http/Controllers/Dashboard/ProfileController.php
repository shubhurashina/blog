<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function profile() {
    	return view('dashboard.profile');
    }
}
