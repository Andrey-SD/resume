<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Резюме Андрей Деркач</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link href="{{ URL::asset('img/icon.png')}}" rel="icon">
	<link href='{{ URL::asset('fonts/droid.ttf')}}' type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link href='{{ URL::asset('css/main.css') }}' rel="stylesheet" type="text/css">
	<link href='{{ URL::asset('css/print.css') }}' rel="stylesheet" type="text/css">
</head>
<body>
	<div class="nav">
		<a href="{{ URL::asset('download')}}" title="скачать PDF"><img alt="скачать PDF" src="img/pdf.png"></a>
		<a href="{{ URL::asset('print')}}" title="печать"><img alt="печать" src="img/print.png"></a>
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
						<a href="{{ URL::asset('home')}}">Главная</a>
						<a href="{{ URL::asset('resume')}}">Резюме</a>
						<a href="{{ URL::asset('projects')}}">Проекты</a>
						<a href="{{ URL::asset('contacts')}}">Контакты</a>
					</li>
				</ul>
			</div>
		</div>
	</header>
		@yield('content')
	</div>
	<footer>
		<div>	
				<div style="background-image: url(img/phone.png);">
					<div>
						<p>Звоните</p>
						<p>{{$info->phone_number}}</p>
					</div>
				</div>
				<div style="background-image: url(img/mail.png);">
						<p>Пишите</p>
						<p>{{$info->email}}</p>
				</div>
				<div style="background-image: url(img/connect.png);">
						<p>Заходите</p>
						<p>
							<a href="https://github.com/Andrey-SD?tab=repositories" title="GitHub" target="_blank">
								<img src="img/git-logo.svg">
							</a>
							<a href="https://www.linkedin.com/in/%D0%B0%D0%BD%D0%B4%D1%80%D0%B5%D0%B9-%D0%B4%D0%B5%D1%80%D0%BA%D0%B0%D1%87-4018a292/" title="Linkedin" target="_blank">
								<img src="img/linked-logo.svg">
							</a>
							<a href="https://www.facebook.com/profile.php?id=100017494866601" title="Facebook" target="_blank">
								<img src="img/facebook-logo.svg">
							</a>
						</p>

				</div>
		</div>
	</footer>
</body>
<script src="{{ URL::asset('js/active.js') }}"></script>
</html>