<?php

namespace App\Http\Controllers\Publish;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResumeController extends Controller
{
    public function resume()
	{
		return view('resume');
	}
}
