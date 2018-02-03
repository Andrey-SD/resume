@extends('layouts.main')
@section('content')
	<form class="form-horizontal" method="POST" action="{{ route('code_edit') }}">
    {{ csrf_field() }}
		<div class="form-group">
			<textarea class="form-control" rows="25" name="code">{{$data}}</textarea>
		</div>
		<button style="width:100%" type="submit" class="btn btn-primary">
			Save
		</button>
	</form>
@endsection