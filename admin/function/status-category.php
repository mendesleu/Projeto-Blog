<?php


    $status = isset($_GET['status'])?$_GET['status']:"invalid";    

    switch($status){
        case "true":
            echo "
                <input type='checkbox' id='check'>
                <div id='box-warning'>
                    <label for='check'>Categoria gravada com sucesso! <strong>Fechar</strong></label>
                </div>
                ";
            break;
        
        case "false":
            echo "
                <input type='checkbox' id='check'>
                <div id='box-warning-error'>
                    <label for='check'>Erro ao gravar categoria! <strong>Fechar</strong></label>
                </div>
                ";
            break;

        case "update":
            echo "
                <input type='checkbox' id='check'>
                <div id='box-warning-update'>
                    <label for='check'>Categoria alterada com sucesso! <strong>Fechar</strong></label>
                </div>
                ";
            break;
        
        case "del":
            echo "
                <input type='checkbox' id='check'>
                <div id='box-warning-del'>
                    <label for='check'>Categoria deletada com sucesso! <strong>Fechar</strong></label>
                </div>
                ";
            break;
        case "invalid":
            header("Location: ../login.php");
        break;
    }

?>