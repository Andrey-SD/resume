<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;
use App\Project;

class ProjectsController extends Controller
{
    public function projects()
	{
		$projects = Project::all();
		return view('projects')->with(['projects'=>$projects]);
	}
}