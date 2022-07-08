<?php
// Де-факто, здесь авторизация
session_start();
if (isset($_SESSION["user"]) == FALSE) {
	echo '<meta http-equiv="refresh" content="2; url=login.php">' ;
	die("Требуется логин. Вы будете перенаправлены автоматически");
}

?>

<html>
	<head>
		<title>Калькулятор</title>
		<meta charset="utf-8" />
		<style>
			input, button {
				margin: 6px;
			}
			
			button {
				width: 77px;
			}
		</style>
			
		<script>
			function plus() {
				var x, y, z;
				x = parseInt(document.getElementById("num1").value);
				y = parseInt(document.getElementById("num2").value);
				z = x + y;
				document.getElementById("num3").value = z;
			}
		</script>
	</head>
	<body>
		<a href ="index1.html">Домашняя страница</a>
		<h1>Калькулятор на чистом JS</h1>
		<input type="text" id="num1" /> <br />
		<input type="text" id="num2"/> <br />
		<button onclick="plus();">+</button>
		<button onclick="minus();">-</button> <br />
		<input type="text" id="num3"/>
	</body>
</html>