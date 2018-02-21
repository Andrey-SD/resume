@extends('layouts.main')
@section('content')
<div class="projects_div">
<p style="display: none;">{{ $inc = 0 }}</p>
	@foreach($info->project as $project)
		<div class="row projects_row row-flex" >
			<div class="col-md-4">
				
				<img src='{{ URL::asset($project->preview_img_link) }}' alt="preview"></img>
			</div>
			<div class="col-md-8 projects_col">
				<div>
					<div class="project_num">
						<p>Проект | {{ sprintf("%'.02d\n",++$inc) }}</p>
					</div>
					<div class="project_description">
						<h1>{{$project->name}}</h1>
						<div class="parent_text_area">
							<textarea readonly>{{$project->description}}</textarea>
						</div>
						<p><a href="{{$project->link_heroku}}" target="_blank">смотреть</a></p>
					</div>
				</div>
			</div>
		</div>
	@endforeach
</div>
<script src="{{ URL::asset('js/scr.js') }}"></script>
@endsection