<?php 

   session_start();

   $error = isset($_GET['error'])?$_GET['error']:"";

   switch($error){
        case "login":
            echo "
            <input type='checkbox' id='check'>
            <div id='box-warning-error'>
            <label for='check'>Usuário ou senha incorretos! <strong>Fechar</strong></label>
            </div>
            ";
        break;
   }

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