@extends('layouts.main')
@section('content')

<section class="print">
	<h1>{{$info->family}} {{$info->name}} </h1>
	<h3>{{$info->position}}</h3>
	<div>
		<table>
			<tr>
				<td>Телефон (Viber)</td>
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
		<div class="rw">
			<p>Образование:</p>
			<div>
				@foreach($info->education as $education)
					<p>Период: {{$education->date}}</p>
					<p>Место учебы: {{$education->name}}</p>
					<p>Специальность: {{$education->lesson}}</p>
				@endforeach
			</div>
		</div>
		<div class="rw">
			<p>Навыки:</p>
			<div class="skills">
				<dl>
					<dt>HTML</dt>
					<dt>CSS</dt>
						<ul>
							<li>Bootstrap</li>
						</ul>
					<dt>JavaScript</dt>
						<ul>
							<li>Ajax</li>
							<li>JQuery</li>
							<li>DOM</li>
						</ul>
					<dt>MYSQL</dt>
					<dt>PHP</dt>
						<ul>
							<li>Laravel</li>
						</ul>
					<dt>GitHub</dt>
				</dl>
			</div>
		</div>
		<div class="rw">
			<p>Опыт работы:</p>
			<div>
				@foreach($info->works as $work)
					<p class="frs">{{$work->date}}</p>
					<p class="scn">{{$work->name}}</p>
					<p class="tr">{{$work->position}}</p>
					<p style="border-bottom: 1px dotted #8B8B8B; margin-bottom:5mm !important;">{{$work->duties}}</p>
				@endforeach
			</div>			
		</div>
	
</section>
<button>Печать</button>





@endsection