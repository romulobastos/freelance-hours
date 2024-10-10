<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jeremias</title>
</head>
<body>
	<h1>Lista do Jeremias:</h1>

	<ul>
		@foreach (range(1,20) as $key)
			<li>{{ $key }}</li>
		@endforeach
	</ul>
</body>
</html>
