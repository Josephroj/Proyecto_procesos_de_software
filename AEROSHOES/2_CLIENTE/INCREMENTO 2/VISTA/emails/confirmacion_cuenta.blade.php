<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

Su tokens es ::  {{$token}}
<hr>
<br>
<hr>
<a href="<?=Request::root()?>/usuarios/reestablecerpassword?token=<?=urlencode($token)?>"> Haz click paar Recuperar</a>
<h3>Estos Datos son confidenciales correspondientes al usuario</h3>
<h3>Visite mas  frecuenta estimado usuario</h3>
<h3>LLevese una buena referencia de LA EMPRESA AEROSHOES</h3>
</body>
</html>