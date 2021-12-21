<?php 

   session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" media="all" type="text/css" href="../css/style-admin.css">
    <link rel="stylesheet" media="all" type="text/css" href="../css/login.css">

</head>
<body>

    <div id="container-login">
        <form action="function/login.php?func=login" method="POST">
            <div id="box-login">Area de Login</div>
            <input type="text" placeholder="Usuário:" name="user">
            <input type="password" placeholder="Senha:" name="password">
            <button type="submit">Entrar</button>
        </form>
    </div>

</body>
</html>