@extends('layouts.main')
@section('content')
<div class="projects_div">
<!--	{{ $inc = 0 }}-->
@for($b = 0; $b < 2; $b++)
	@foreach($projects as $project)
		<div class="row projects_row row-flex" >
			<div class="col-md-4">
				<img src='{{ URL::asset('img/sat.png') }}' alt="preview"></img>
			</div>
			<div class="col-md-8 projects_col">
				<div>
					<div class="project_num">
						<p>Проект | {{ sprintf("%'.02d\n",++$inc)}}</p>
					</div>
					<div class="project_description">
						<h4>{{$project->name}}</h4>
						<div class="parent_text_area">
							<textarea readonly>@for($i = 0; $i < 80; $i++){{$project->description}}@endfor
							</textarea>
						</div>
						<p><a href="{{$project->link}}" target="_blank">{{$project->link}}</a></p>
						<p><a href="{{$project->link}}" target="_blank">{{$project->link}}</a></p>
					</div>
				</div>
			</div>
		</div>
	@endforeach
@endfor
</div>
<script src="{{ URL::asset('js/scr.js') }}"></script>
@endsection