<?php

    include "conn.php";

    $func = isset($_GET['func'])?$_GET['func']:"";
    $id = isset($_GET['id'])?$_GET['id']:"";

    switch($func){

        case "insert":

            $timezone = new DateTimeZone('America/Sao_Paulo'); // Define o fuso horario
            $date1 = new DateTime('now', $timezone); // Define o horario atual baseado no fuso

            $date = $date1->format('d/m/Y H:i');
            
            $title = $_POST['title'];
            $thumb = $_POST['thumb'];
            $author = $_POST['author'];
            $category = $_POST['category'];
            $post = $_POST['post'];

            $insert = "INSERT INTO posts (date, title, thumb, author, category, post) VALUE ('$date', '$title', '$thumb', '$author', '$category', '$post')";
            $query = mysqli_query($conn, $insert);

            if($query == true){
                header("Location: ../list-post.php?status=true");
            }else {
                header("Location: ../list-post?status=error");
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
                header("Location: ../list-post.php?status=update");
            }
         break;
        
        case "delete":

            $delete = "DELETE FROM posts WHERE id = $id";
            $query = mysqli_query($conn, $delete);

            if($query == true){
                echo "Postagem deletada com sucesso";
                header("Location: ../list-post.php?status=del");
            }
        break;

    }

    mysqli_close($conn);

?>