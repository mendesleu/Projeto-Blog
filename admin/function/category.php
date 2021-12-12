<?php

    require_once "conn.php";

    $category = $_POST['category'];

    $insert = "INSERT INTO category (category) VALUE ('$category')";
    $query = mysqli_query($conn, $insert);

    if($query == true){
        // echo "Categoria Gravada com sucesso";
        header("Location: ../category.php?white=true");
    }else{
        // echo "Erro ao gravar categoria";
        // echo $conn -> error;
        header("Location: ../category.php?white=false");
    }

    mysqli_close($conn);

?>