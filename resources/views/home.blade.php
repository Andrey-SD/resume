@extends('layouts.main')
@section('content')
<section>
		<div class="row">
			<div class="col-md-5 col-sm-5">
				<img src='{{ URL::asset('img/photo.png')}}'>
			</div>
			<div class="col-md-7 col-sm-7">
				<h1>Здравствуйте, меня зовут {{$info->name}}.</h1>
				<div class="links ">
					<a href="{{ URL::asset('resume')}}">Резюме</a>
					<a href="{{ URL::asset('projects')}}">Проекты</a>
					<a href="{{ URL::asset('resume')}}">Навыки</a>
				</div>
				<p>{{$info->about}}</p>
			</div>
		</div>
	</section>
@endsection