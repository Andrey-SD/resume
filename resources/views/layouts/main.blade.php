<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Резюме Андрей Деркач</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link href="{{ URL::asset('img/icon.png') }}" rel="icon">
	<link href='{{ URL::asset('fonts/droid.ttf') }}' type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link href='/css/main.css' rel="stylesheet" type="text/css">
	<!-- test -->
	<link href='{{ URL::asset('css/print.css') }}' rel="stylesheet" type="text/css">
</head>

<body>
	<div class="nav">
		<a href="{{ URL::asset('download') }}" title="скачать PDF"><img alt="скачать PDF" src="{{ URL::asset('img/pdf.png') }}"></a>
		<a href="{{ URL::asset('print') }}" title="печать"><img alt="печать" src="{{ URL::asset('img/print.png') }}"></a>
	</div>
	<header>
		<div class="row">
			<div class="col-md-5 col-sm-5">
				<h1>{{$info->name}} {{$info->family}}</h1>
				<h3>{{$info->position}}</h3>
			</div>
			<div class="col-md-7 col-sm-7">
				<ul>
					<li>
						<a href="{{ URL::asset('home') }}">Главная</a>
						<a href="{{ URL::asset('resume') }}">Резюме</a>
						<a href="{{ URL::asset('projects') }}">Проекты</a>
						<a href="{{ URL::asset('contacts') }}">Контакты</a>
					</li>
				</ul>
			</div>
		</div>
	</header>
	@yield('content')

	<footer>
		<div>
			<div style="background-image: url({{ URL::asset('img/phone.png') }});">
				<div>
					<p>Звоните</p>
					<p>{{$info->phone_number}}</p>
				</div>
			</div>
			<div style="background-image: url({{ URL::asset('img/mail.png') }});">
				<p>Пишите</p>
				<p>{{$info->email}}</p>
			</div>
			<div style="background-image: url({{ URL::asset('img/connect.png') }});">
				<p>Заходите</p>
				<p>
					<a href="https://github.com/Andrey-SD?tab=repositories" title="GitHub" target="_blank">
						<img src="{{ URL::asset('img/git-logo.svg') }}">
					</a>
					<a href="https://www.facebook.com/profile.php?id=100017494866601" title="Facebook" target="_blank">
						<img src="{{ URL::asset('img/facebook-logo.svg') }}">
					</a>
				</p>

			</div>
		</div>
	</footer>
</body>
<script src="{{ URL::asset('js/active.js') }}"></script>

</html>