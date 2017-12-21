<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;

class HomeController extends Controller
{
	function home() {
		
		return view('home');
	}
}

