<?php

    include "conn.php";

    $func = isset($_GET['func'])?$_GET['func']:"";
    $id = isset($_GET['id'])?$_GET['id']:"";

    switch($func){

        case "insert":

            $timezone = new DateTimeZone('America/Sao_Paulo'); // Define o fuso horario
            $date1 = new DateTime('now', $timezone); // Define o horario atual baseado no fuso

            $date = $date1->format('d/m/Y H:i');

            
            if(isset($_FILES['thumb'])){
                $extensao = strtolower(substr($_FILES['thumb']['name'], -4)); //Capta a extensão do arquivo
                $thumb_name = md5(time()). $extensao; // Muda o nome do arquivo
                $diretorio = "../../img/post/"; // Diretorio onde será salvo o arquivo

                move_uploaded_file($_FILES['thumb']['tmp_name'], $diretorio.$thumb_name); // Vai mover o arquivo para o diretorio

            }
            
            $title = $_POST['title'];
            $author = $_POST['author'];
            $category = $_POST['category'];
            $post = $_POST['post'];
            $tag = $_POST['tags'];

            $insert = "INSERT INTO posts (date, title, author, thumb, category, post, tags) VALUE ('$date', '$title', '$author', '$thumb_name', '$category', '$post', '$tag')";
            $query = mysqli_query($conn, $insert);

            if($query == true){
                header("Location: ../list-post.php?status=true");
            }else {
                header("Location: ../list-post.php?status=error");
            }

        break;

        case "update":

            $title = $_POST['title'];
            $author = $_POST['author'];
            $category = $_POST['category'];
            $post = $_POST['post'];
            $tag = $_POST['tags'];

            $update = "UPDATE posts SET title='$title', author='$author', category='$category', post='$post', tags='$tag' WHERE id=$id";
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