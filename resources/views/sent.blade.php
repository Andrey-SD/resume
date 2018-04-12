@extends('layouts.main')
@section('content')
<section>
	<h1 style="text-align:right;">Ваше письмо отправлено.</h1>
	<h3 style="text-align:right;">Как только я его прочту-я отвечу Вам</h3>
	<p style="text-align:right;">Спасибо за внимание, с уважением {{$info->name}} {{$info->family}}.</p>
</section>
@endsection