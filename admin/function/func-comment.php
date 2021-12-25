<?php

    require_once "conn.php";

    $func = isset($_GET['func'])?$_GET['func']:"invalid";
    $id_post = isset($_GET['id'])?$_GET['id']:"";
    echo $id_post;

    switch($func){

        case "comment":

            $name = $_POST['name'];
            $comment = $_POST['comment'];

            $insert = "INSERT INTO comment (id_post, name, comment) VALUES ('$id_post', '$name', '$comment')";
            $query = mysqli_query($conn, $insert);

            if($query == true){
                // echo "gravado";
                header("Location: ../../pages/noticia.php?status=comment&id=$id_post#form-comment");
            }else{
                echo $conn -> error;
            }

        break;

        case "invalid":
            header("Location: ../index.php");
        break;

    }


?>