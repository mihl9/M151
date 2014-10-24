<!DOCTYPE html>
<html lang="de">
	<head>
		<link rel="stylesheet" type="text/css" media="screen" href="./public/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" media="screen" href="./public/css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" media="screen" href="./public/css/index.css">
		<script type="text/javascript" src="./public/js/bootstrap.js">
		</script>
	</head>
	<body>
		<div id="menue">
			Menue :
			<a href="?controller=index">
				Index
			</a> /
			<a href="?controller=kontakt">
				Kontakt
			</a> /
			<a href="?controller=login">
				Login
			</a>
			<hr>
		</div>
		<div id="content">
			Content : <hr>
			<?php
			echo $data;
			?>
		</div>
	</body>
</html>