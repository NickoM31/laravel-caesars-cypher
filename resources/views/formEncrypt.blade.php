<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulaire</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<form action="/" method="post">
	{{csrf_field()}}
	<label for="text">Entrer votre texte </label>
		<input type="text" name="text" id="text">
		<button type="submit">Valider</button>
	</form>
	
</html>