@extends('layouts.main')
@section('content')
<div class="row row-flex">
	<div class="col-md-4" >
		<img src='{{ URL::asset('img/photo.png')}}'>
	</div>
	<div class="col-md-8">
		<div class="right_div">
			<h1>{{$info->title}}</h1>
			<h3>{{$info->title_min}}</h3>
<!--			<a href="/public/resume">Резюме</a>-->
            <a href="{{ URL::asset('resume')}}">Резюме</a>
			<a href="{{ URL::asset('projects')}}">Проекты</a>
			<a href="{{ URL::asset('resume')}}">Навыки</a>
			<p>{{$info->about}}</p>
		</div>
	</div>
</div>


@endsection