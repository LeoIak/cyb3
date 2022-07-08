<html>
	<head>
		<title>Логин</title>
		<meta charset="utf-8" />
		<style>
		
			input {
				width: 150px;
				margin: 5px;
			}
			
		</style>
		
	</head>
	
	<body>
		<a href ="index1.html">Домашняя страница</a>
		<h1 id="hdr1">Введите имя пароль</h1>
		
		<form action="check_login.php" method="POST" >
			<input type="text" name="txtUser" /> <br />
			<input type="password" name="txtPwd" /> <br />
			<input type="submit" value="Войти!" />
		
		</form>
		
	</body>

</html>