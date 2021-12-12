<?php

    $conn = mysqli_connect("localhost", "root", "");
    $bd = mysqli_select_db($conn, "blog_bd");

    // if($bd == true){
    //     echo "Conexão iniciada com sucesso";
    // }else{
    //     echo "Erro ao conectar";
    // }

?>