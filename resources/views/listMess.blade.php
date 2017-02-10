<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liste des messages</title>
</head>
<body>
	<h1>Messages</h1>
	@foreach ($mess as $message )
	<li>{{$message->text}}</li>
	@endforeach
	<a href="/form">Poster un message</a>
</body>
</html>