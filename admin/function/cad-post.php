<?php

    include "conn.php";

    $func = isset($_GET['func'])?$_GET['func']:"";
    $id = isset($_GET['id'])?$_GET['id']:"";

    switch($func){

        case "insert":
            
            $title = $_POST['title'];
            // $date = $_POST['date'];
            $thumb = $_POST['thumb'];
            $author = $_POST['author'];
            $category = $_POST['category'];
            $post = $_POST['post'];

            $insert = "INSERT INTO posts (title, thumb, author, category, post) VALUE ('$title', '$thumb', '$author', '$category', '$post')";
            $query = mysqli_query($conn, $insert);

            if($query == true){
                echo "Postagem feita com sucesso";
            }else {
                echo "Erro ao fazer a postagem";
                echo $conn -> error;
            }

        break;

        case "update":

            $title = $_POST['title'];
            $thumb = $_POST['thumb'];
            $author = $_POST['author'];
            $category = $_POST['category'];
            $post = $_POST['post'];

            $update = "UPDATE posts SET title='$title', thumb='$thumb', author='$author', category='$category', post='$post' WHERE id=$id";
            $query = mysqli_query($conn, $update);

            if($query == true){
                echo "Postagem alterada com sucesso";
            }else {
                echo "Erro ao alterar a postagem <br>";
                echo $conn -> error;
            }
         break;
        
        case "delete":

            $delete = "DELETE FROM posts WHERE id = $id";
            $query = mysqli_query($conn, $delete);

            if($query == true){
                echo "Postagem deletada com sucesso";
            }else{
                echo "Erro ao deletar postagem";
            }
        break;

    }

    mysqli_close($conn);

?>