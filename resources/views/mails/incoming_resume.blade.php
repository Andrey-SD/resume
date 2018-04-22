<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<style type="text/css">
		body{
			background-color: #EAE5E5;
		}

		h1,h3,ul,p,dl{
			margin: 0;
			padding: 0;
		}

		header,section{
			width: 800px;
			margin: 0 auto;
		}

		h1, h3{
			color: #4D4D4D;
			font-family: fantasy;
		}
		header ul{
			display: inline-block;
			float: right;
			margin-top: 37px;
		}

		header li{
			list-style-type: none;
		}

		header li>a{
			font-size: 20px;
			color: #8B8B8B;
			margin-left: 25px;
			font-family: fantasy;
		}
		
		.row>div{
			display: inline-block;
		}
		
		header ul{
			display: inline-block;
			float: right;
			margin-top: 37px;
		}

		header li{
			list-style-type: none;
		}

		header li>a{
			font-size: 20px;
			color: #8B8B8B;
			margin-left: 25px;
			font-family: fantasy;
		}

		a:hover{
			color: #61D0D4;
			text-decoration: none;
		}
		
		a{
			text-decoration: none;
		}
		
		.links{
			text-align: center;
		}

		.links a{
			color: white;
			font-size: 15px;
			text-align: center;
			line-height: 100px;
			border-radius: 50px;
			width: 100px;
			height: 100px;
			margin: 30px 10px 30px 10px;
			display: inline-block;
		}
		
		section img{
			display: block;
			margin: 0 auto !important;
		}
		
		section h1,section p{
			text-align: right;
		}
		
		footer{
			margin-top: 50px;
			width: 100%;
			position: fixed;
			bottom: 0;
			background-color: #E83556;
			height: 60px;
		}

		footer>div>div{
			background-repeat: no-repeat;
			background-position: 5px center;
			width: 25%;
			height: 60px;
			display: inline-block;
			padding-left: 55px;
			vertical-align: top;
		}
		
		footer>div p{
			color: white;
		}

		footer>div p:first-child{
			font-weight: bold;
		}

		footer>div{
			width: 800px;
			margin: 0 auto;
		}


	</style>
</head>
<body>
	<div class="nav" style="padding:2px;width:100px;margin-left:auto;">
		<a href="{{ URL::asset('download')}}" title="скачать PDF"><img alt="скачать PDF" src="{{ URL::asset('img/pdf.png')}}"></a><a href="{{ URL::asset('print')}}" title="печать"><img alt="печать" src="{{ URL::asset('img/print.png')}}"></a>
	</div>
	<header>
		<div class="row">
			<div style="width:39%">
				<h1>{{$info->name}} {{$info->family}}</h1>
				<h3>{{$info->position}}</h3>
			</div>
			<div style="width:59%">
				<ul>
					<li>
						<a href="{{ URL::asset('home')}}" style="color: #8B8B8B;">Главная</a>
						<a href="{{ URL::asset('resume')}}" style="color: #8B8B8B;">Резюме</a>
						<a href="{{ URL::asset('projects')}}" style="color: #8B8B8B;">Проекты</a>
						<a href="{{ URL::asset('contacts')}}" style="color: #8B8B8B;">Контакты</a>
					</li>
				</ul>
			</div>
		</div>
	</header>
	<section>
	<div class="row">
		<div style="width:39%">
			<img src='{{ URL::asset('img/photo.png')}}'>
		</div>
		<div style="width:59%">
			<h1>Здравствуйте, меня зовут {{$info->name}}.</h1>
			<div class="links">
				<a href="{{ URL::asset('resume')}}" style="background-color:#E83556;">Резюме</a>
				<a href="{{ URL::asset('projects')}}" style="background-color:#61D0D4;">Проекты</a>
				<a href="{{ URL::asset('resume')}}" style="background-color:#D1C926;">Навыки</a>
			</div>
			<p>{{$info->about}}</p>
		</div>
	</div>
	</section>
	<footer>
		<div>	
				<div style="background-image: url({{ URL::asset('img/phone.png')}});">
					<div>
						<p>Звоните</p>
						<p>{{$info->phone_number}}</p>
					</div>
				</div>
				<div style="background-image: url({{ URL::asset('img/mail.png')}});">
						<p>Пишите</p>
						<p>{{$info->email}}</p>
				</div>
				<div style="background-image: url({{ URL::asset('img/connect.png')}});">
						<p>Заходите</p>
						<p>
							<a href="https://github.com/Andrey-SD?tab=repositories" title="GitHub" target="_blank">
								<img src="{{ URL::asset('img/git-logo.svg')}}">
							</a>
							<a href="https://www.linkedin.com/in/%D0%B0%D0%BD%D0%B4%D1%80%D0%B5%D0%B9-%D0%B4%D0%B5%D1%80%D0%BA%D0%B0%D1%87-4018a292/" title="Linkedin" target="_blank">
								<img src="{{ URL::asset('img/linked-logo.svg')}}">
							</a>
							<a href="https://www.facebook.com/profile.php?id=100017494866601" title="Facebook" target="_blank">
								<img src="{{ URL::asset('img/facebook-logo.svg')}}">
							</a>
						</p>

				</div>
		</div>
	</footer>
</body>