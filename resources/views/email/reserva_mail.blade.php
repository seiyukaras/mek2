<!DOCTYPE html>

<html>

<head>
	<style type="text/css">
		blockquote { margin-top: 25px; display: block; background: #fff; color: #9d9d9d; position: relative; font-size: 14px; padding-left: 60px; border-left: 5px solid #f5f5f5; font-style: italic; padding-right: 0px; }
		blockquote::before { content: "\201C"; font-family: Georgia, serif; font-size: 60px; font-weight: bold; color: #e5e5e5; position: absolute; left: 10px; top: -5px; }
		blockquote::after { content: ""; }
		blockquote cite { font-size: 14px; margin-top: 15px; display: block; font-weight: 600; color: #e93e21; }
	</style>
	<title>Correo de Confirmación,</title>

</head>

<body>
	<div class="bs-callout bs-callout-danger">
	<blockquote>
	<center>

		<h2 style="padding: 23px;background: #b3deb8a1;border-bottom: 6px green solid;">

		</h2>

		<p>Hola, <cite>{{ $reserva->name}}</cite></p>

		<p>Este correo es para informarle que su reservación en el Restaurante M`ka para el dia {{ $reserva->getDiaFormat()}} a la hora {{ $reserva->getHoraFormat() }} a sido confirmada.</p>

		<strong>Gracias por preferirnos, los esperamos. :)</strong>

	</center>
	</blockquote>
	</div>
</body>

</html>