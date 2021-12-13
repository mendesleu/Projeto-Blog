<?php

    switch($status){
        case "true":
            echo "
                <input type='checkbox' id='check'>
                <div id='box-warning'>
                    <label for='check'>Postagem gravada com sucesso! <strong>Fechar</strong></label>
                </div>
                ";
            break;
        
        case "error":
            echo "
                <input type='checkbox' id='check'>
                <div id='box-warning-error'>
                    <label for='check'>Erro ao gravar Postagem! <strong>Fechar</strong></label>
                </div>
                ";
            break;

        case "update":
            echo "
                <input type='checkbox' id='check'>
                <div id='box-warning-update'>
                    <label for='check'>Postagem alterada com sucesso! <strong>Fechar</strong></label>
                </div>
                ";
            break;
        
        case "del":
            echo "
                <input type='checkbox' id='check'>
                <div id='box-warning-del'>
                    <label for='check'>Postagem deletada com sucesso! <strong>Fechar</strong></label>
                </div>
                ";
            break;
    }

?>