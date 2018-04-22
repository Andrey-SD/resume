@extends('layouts.main')
@section('content')
<section>
	<form class="form-horizontal" method="POST" action="{{ route('code_edit') }}">
    {{ csrf_field() }}
		
			<textarea class="form-control" rows="25" name="code">{{$data}}</textarea>
		
		<button style="width:100%" type="submit">
			Save
		</button>
	</form>
	<h3>Отправить резюме</h3>
	<form method="post" action="send-mail-resume" accept-charset="UTF-8" >
			{{ csrf_field() }}
				<input type="email" name="email" placeholder="Email" required>
				<input type="submit">		
			</form>
</section>
@endsection