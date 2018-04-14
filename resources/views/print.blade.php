@extends('layouts.main')
@section('content')

<section class="print">
	<h1>{{$info->family}} {{$info->name}} </h1>
	<h3>{{$info->position}}</h3>
	<div>
		<table>
			<tr>
				<td>Телефон</td>
				<td>{{$info->phone_number}}</td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td>{{$info->email}}</td>
			</tr>
			<tr>
				<td>Дата рождения</td>
				<td>{{$info->bd}}</td>
			</tr>
			<tr>
				<td>Проживание</td>
				<td>Днепр (Украина)</td>
			</tr>
			<tr>
				<td>Возможность переезда</td>
				<td>Харьков (Украина)</td>
			</tr>
			<tr>
				<td>Семейное положение</td>
				<td>Женат</td>
			</tr>
			<tr>
				<td>Дети</td>
				<td>Есть</td>
			</tr>
		</table>
		<img src='{{ URL::asset('img/photo.png')}}'>
	</div>
</section>
<button>Печать</button>





@endsection