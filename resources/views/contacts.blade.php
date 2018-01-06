@extends('layouts.main')
@section('content')
<div class="row">
	<div class="col-md-6">
		<h4>Вы можете позвонить мне в любое время.</h4>
		<p class="kyivstar cont_list">{{$info->phone_number}}</p></br>
		<h4>Вы можете написать мне в любое время.</h4>
		<p class="viber cont_list">{{$info->phone_number}}</p>
		<p class="mail cont_list">
			<a href="https://mail.google.com/mail/u/0/?tab=wm#inbox?compose=new" title="Gmail" target="_blank">{{$info->email}}</a>
		</p>
		<p class="linked cont_list">
			<a href="https://www.linkedin.com/in/%D0%B0%D0%BD%D0%B4%D1%80%D0%B5%D0%B9-%D0%B4%D0%B5%D1%80%D0%BA%D0%B0%D1%87-4018a292/" title="Linkedin" target="_blank">LinkedIn</a>
		</p></br>
		<h4>Вы можете посмотреть мой код.</h4>
		<p class="git cont_list">
			<a href="https://github.com/Andrey-SD?tab=repositories" title="GitHub" target="_blank">GitHub</a>
		</p>
	</div>
	
	<div class="col-md-6">
		<h4>Вы можете отправить мне письмо.</h4>
		<h4>Я обязательно отвечу Вам в ближайшее время.</h4>
		<form method="post" action="send-mail" accept-charset="UTF-8" >
		{{ csrf_field() }}
				<input type="text" name="name" placeholder="Имя" required>
				<input type="email" name="email" placeholder="Ваш Email" required>
				<input type="text" name="subject" placeholder="Тема" required>
				<div class="parent_text_area">
					<textarea name="message" placeholder="Сообщение" required></textarea>
				</div>
				<input type="submit">		
			</form>
			
			
			
	</div>
</div>

<div id="prelodaer">
    <img src="{{ URL::asset('img/preloader.gif')}}" alt="preloder">
</div>

<script>
    $('form').submit(function(){
        $('#prelodaer').css('display', 'block');
    });
</script>
@endsection