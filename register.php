<html>
	<head>
		<title>Регистрация</title>
		<meta charset="utf-8" />
		<style>
		
			input {
				width: 150px;
				margin: 5px;
			}
			#Автор {
                position: absolute;
                bottom: 10em;
                right: 40em;
                text-align: right;
}
		</style>	
	</head>
	<body>
		<a href ="index1.html">Домашняя страница</a>
		<h1 id="hdr1">Регистрация нового пользователя</h1>
				<form action="check_register.php" method="post">
                <label>Ваше имя:</label> <br>
					<input type="text" name="username" class="form-control"><br>
                <label>Ваше Email:</label> <br>
					<input type="text" name="email" class="form-control"><br>
                <label>Ваш логин:</label> <br>
					<input type="text" name="login" class="form-control"><br>
                <label>Ваш пароль:</label> <br>
                    <input type="password" name="pwd" class="form-control"><br>
				<button class="btn btn-success">Зарегистрироваться!</button><br>
				</form> 
    <div id="Автор">Автор: Лев Якубович</div>
    </body>
</html>