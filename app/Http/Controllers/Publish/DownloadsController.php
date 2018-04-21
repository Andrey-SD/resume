<?php

namespace App\Http\Controllers\Publish;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DownloadsController extends Controller
{
	public function download() {
	$file_path = public_path('files/Andrey_Derkach_resume.pdf');
    return response()->download($file_path);
	}
}
