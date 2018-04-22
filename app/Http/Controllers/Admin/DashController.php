<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashController extends Controller
{
	
    public function dash() {
		$data = file_get_contents('data.xml');
		return view('admin.dashboard', ['data' => $data]);
	}
	
	public function code_edit(Request $request) {
		file_put_contents('data.xml',$request->code);
		return redirect('/');
	}
	
}
