<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Резюме Андрей Деркач</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link href="<?php echo e(URL::asset('img/icon.png')); ?>" rel="icon">
	<link href='<?php echo e(URL::asset('fonts/droid.ttf')); ?>' type="text/css">

	<link rel="stylesheet" href="<?php echo e(URL::asset('bootstrap-3.3.4-dist/css/bootstrap.min.css')); ?>">
	<script src="<?php echo e(URL::asset('jquery-3.2.1/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('bootstrap-3.3.4-dist/js/bootstrap.min.js')); ?>"></script>

	<link href='<?php echo e(URL::asset('css/main.css')); ?>' rel="stylesheet" type="text/css">
	<link href='<?php echo e(URL::asset('css/print.css')); ?>' rel="stylesheet" type="text/css">
</head>

<!-- если стили не загружаются проверить протокол http/https
перейти в app/Providers\AppServiceProvider.php
public function boot()
	{
		URL::forceScheme('https');
	}
перключить протокол -->


<body>
	<div class="nav">
		<a href="<?php echo e(URL::asset('download')); ?>" title="скачать PDF"><img alt="скачать PDF" src="<?php echo e(URL::asset('img/pdf.png')); ?>"></a>
		<a href="<?php echo e(URL::asset('print')); ?>" title="печать"><img alt="печать" src="<?php echo e(URL::asset('img/print.png')); ?>"></a>
	</div>
	<header>
		<div class="row">
			<div class="col-md-5 col-sm-5">
				<h1><?php echo e($info->name); ?> <?php echo e($info->family); ?></h1>
				<h3><?php echo e($info->position); ?></h3>
			</div>
			<div class="col-md-7 col-sm-7">
				<ul>
					<li>
						<a href="<?php echo e(URL::asset('home')); ?>">Главная</a>
						<a href="<?php echo e(URL::asset('resume')); ?>">Резюме</a>
						<a href="<?php echo e(URL::asset('projects')); ?>">Проекты</a>
						<a href="<?php echo e(URL::asset('contacts')); ?>">Контакты</a>
					</li>
				</ul>
			</div>
		</div>
	</header>
	<?php echo $__env->yieldContent('content'); ?>

	<footer>
		<div>
			<div style="background-image: url(<?php echo e(URL::asset('img/phone.png')); ?>);">
				<div>
					<p>Звоните</p>
					<p><?php echo e($info->phone_number); ?></p>
				</div>
			</div>
			<div style="background-image: url(<?php echo e(URL::asset('img/mail.png')); ?>);">
				<p>Пишите</p>
				<p><?php echo e($info->email); ?></p>
			</div>
			<div style="background-image: url(<?php echo e(URL::asset('img/connect.png')); ?>);">
				<p>Заходите</p>
				<p>
					<a href="https://github.com/Andrey-SD?tab=repositories" title="GitHub" target="_blank">
						<img src="<?php echo e(URL::asset('img/git-logo.svg')); ?>">
					</a>
					<a href="https://www.facebook.com/profile.php?id=100017494866601" title="Facebook" target="_blank">
						<img src="<?php echo e(URL::asset('img/facebook-logo.svg')); ?>">
					</a>
				</p>

			</div>
		</div>
	</footer>
</body>
<script src="<?php echo e(URL::asset('js/active.js')); ?>"></script>

</html>