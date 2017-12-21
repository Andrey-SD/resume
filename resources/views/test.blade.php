<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	{{ Form::open(array('url' => 'foo/bar')) }}
    	{{ form::text('name') }}
    	{{ form::text('email') }}
    	{{ form::text('subject') }}
    	{{ form::text('message') }}
	{{ Form::close() }}
</body>
</html>