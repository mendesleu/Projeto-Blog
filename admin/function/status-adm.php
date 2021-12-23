<?php


    $status = isset($_GET['status'])?$_GET['status']:"";   
    
    if(!isset($_SESSION['user_ok']) AND !isset($_SESSION['password_ok'])){
        $status = "invalid";
    }

    switch($status){
        case "true":
            echo "
                <input type='checkbox' id='check'>
                <div id='box-warning'>
                    <label for='check'>Usuário criado com sucesso! <strong>Fechar</strong></label>
                </div>
                ";
            break;
        
        case "error":
            echo "
                <input type='checkbox' id='check'>
                <div id='box-warning-error'>
                    <label for='check'>Erro ao criar usuário! <strong>Fechar</strong></label>
                </div>
                ";
            break;

        case "update":
            echo "
                <input type='checkbox' id='check'>
                <div id='box-warning-update'>
                    <label for='check'>Usuário alterado com sucesso! <strong>Fechar</strong></label>
                </div>
                ";
            break;
        
        case "del":
            echo "
                <input type='checkbox' id='check'>
                <div id='box-warning-del'>
                    <label for='check'>Usuário deletado com sucesso! <strong>Fechar</strong></label>
                </div>
                ";
            break;

        case "invalid":
            header("Location: ../index.php");
        break;
    }

?>