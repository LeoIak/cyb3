<?php
session_start();
?>
<html>
<head>
<title>Проверка пользователя</title>
<meta charset="utf-8" />
<style>
    input {
        width: 150px;
        margin: 5px;
    }
</style>
    </head>
    <body>
    <h1>Пользователь зарегистрирован. Вы будете перенаправленны на страницу входа.</h1>
<meta http-equiv="refresh" content="5; url=login.php"/>
<?php
            
    $user = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $login = $_REQUEST["login"];
    $pwd = $_REQUEST["pwd"];
    $hash = hash('sha256', $pwd);
    if (empty($user) or empty($email) or empty($login) or empty($pwd))
    {
    exit ("Введена не вся информация! Необходимо заполнить все поля!");
    }
    $sql="INSERT INTO users (username, email, login, pwdhash) VALUES (?, ?, ?, ?)";
    $db_server=getenv('cyb3_db_server');
    $db_user=getenv('cyb3_db_user');
    $db_pwd=trim(getenv('cyb3_db_pwd'));
    $conn = mysqli_connect($db_server,$db_user,$db_pwd,"cyb3");
    $stat=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stat,"ssss",$user,$email,$login,$hash);
    mysqli_stmt_execute($stat);
    $result=mysqli_stmt_get_result($stat);
    mysqli_close($conn);
?>
    </body>
</html>