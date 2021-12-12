<?php

    require_once "conn.php";

    $func = isset($_GET['func'])?$_GET['func']:"";

    if($func == "insert"){

        $category = $_POST['category'];
        
        $insert = "INSERT INTO category (category) VALUE ('$category')";
        $query = mysqli_query($conn, $insert);
        
        if($query == true){
            // echo "Categoria Gravada com sucesso";
            header("Location: ../category.php?status=true");
        }else{
            // echo "Erro ao gravar categoria";
            // echo $conn -> error;
            header("Location: ../category.php?status=false");
        }
    }

    if($func == "update"){

        $category = $_POST['category'];
        $id = $_GET['id'];

        $update = "UPDATE category SET category=$category WHERE id=$id";
        $query = mysqli_query($conn, $update);

        if($query == true){
            header("Location: ../category.php?status=update");
        }
    }