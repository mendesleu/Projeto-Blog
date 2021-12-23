<?php

    $func = isset($_GET['func'])?$_GET['func']:"logout";

    session_start();

    require_once "conn.php";

    switch($func){
        case 'login':

            $user = $_POST['user'];
            $password = $_POST['password'];
            
            $select = "SELECT * FROM adm WHERE user='$user' AND password='$password'";
            $query = mysqli_query($conn, $select);
            
            if(mysqli_num_rows($query) == 1){
                
                $_SESSION['user_ok'] = $user;
                $_SESSION['password_ok'] = $password;
                
                // echo "login feito com sucesso";
                header("Location: ../list-post.php");
                
            }else{
                
                unset($_SESSION['user_ok']);
                unset($_SESSION['password_ok']);
                
                header("Location: ../login.php");
                
            }

        break;
        case 'logout':

            unset($_SESSION['user_ok']);
            unset($_SESSION['password_ok']);
                
            header("Location:../login.php");

        break;
    }

?>