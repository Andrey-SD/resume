<?php

namespace App\Http\Controllers\Publish;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function home()	{
		return view('home');
	}
}
