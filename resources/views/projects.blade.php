@extends('layouts.main')
@section('content')
<section class="projects">
<p style="display: none;">{{ $inc = 0 }}</p>
	@foreach($info->project as $project)
		<div class="row" >
			<div class="col-md-7 col-sm-7">
				<img src='{{ URL::asset($project->preview_img_link) }}' alt="preview"></img>
			</div>
			<div class="col-md-5 col-sm-5">
				<div class="project_num">
					<p>Проект | {{ sprintf("%'.02d\n",++$inc) }}</p>
				</div>
				<h1>{{$project->name}}</h1>
				<p>{{$project->description}}</p>
				</br>
				<a href="{{$project->link_heroku}}" target="_blank">>>смотреть</a>
			</div>
		</div>
	@endforeach
</section>
@endsection