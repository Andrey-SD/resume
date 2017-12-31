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
	
	
</head>
<body>
	<header>
		<div>
			<h1>{{$info->name}} {{$info->family}}</h1>
			<h3>treneng/junior php dev</h3>
		</div>
		<ul>
			<li class="links">
				<a href="{{ URL::asset('index.php')}}">Главная</a>
				<a href="{{ URL::asset('resume')}}">Резюме</a>
				<a href="{{ URL::asset('projects')}}">Проекты</a>
				<a href="{{ URL::asset('contacts')}}">Контакты</a>
			</li>
		</ul>
	</header>
	<div class="asd">
		@yield('content')
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="background-image: url(img/phone.png);">
					<div class="contacts">
						<p>Звоните</p>
						<p>{{$info->phone_number}}</p>
					</div>
				</div>
				<div class="col-md-3" style="background-image: url(img/mail.png);">
					<div class="contacts">
						<p>Пишите</p>
						<p>{{$info->email}}</p>
					</div>
				</div>
				<div class="col-md-3" style="background-image: url(img/connect.png);">
					<div class="contacts">
						<p>Заходите</p>
						<p>
							<a href="https://github.com/Andrey-SD?tab=repositories" title="GitHub" target="_blank">
								<img src="{{ URL::asset('img/git-logo.svg') }}">
							</a>
							<a href="https://www.linkedin.com/in/%D0%B0%D0%BD%D0%B4%D1%80%D0%B5%D0%B9-%D0%B4%D0%B5%D1%80%D0%BA%D0%B0%D1%87-4018a292/" title="Linkedin" target="_blank">
								<img src="{{ URL::asset('img/linked-logo.svg') }}">
							</a>
							<a href="https://www.facebook.com/profile.php?id=100017494866601" title="Facebook" target="_blank">
								<img src="{{ URL::asset('img/facebook-logo.svg') }}">
							</a>
						</p>

					</div>
				</div>
				<div class="col-md-3" style="background-image: url(img/copy.png);">
					<div class="contacts">
						<p>&copy;2017 {{$info->name}} {{$info->family}}</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
<script src="{{ URL::asset('js/active.js') }}"></script>
</html>