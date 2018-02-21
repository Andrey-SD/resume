@extends('layouts.main')
@section('content')
	<form class="form-horizontal" method="POST" action="{{ route('code_edit') }}">
    {{ csrf_field() }}
		
			<textarea class="form-control" rows="25" name="code">{{$data}}</textarea>
		
		<button style="width:100%" type="submit">
			Save
		</button>
	</form>
@endsection