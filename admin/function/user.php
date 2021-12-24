<?php

    require_once "conn.php";

    $function = isset($_GET['func'])?$_GET['func']:"invalid";
    $id = isset($_GET['id'])?$_GET['id']:"";

    switch($function){
        case "insert":

            $nome = $_POST['name'];
            $description = $_POST['description'];
            $user = $_POST['user'];
            $password = $_POST['password'];
            $level = $_POST['level'];

            $select = "SELECT * FROM adm WHERE user LIKE '%$user%'";
            $query = mysqli_query($conn, $select);

            $valid = $query -> fetch_assoc();

            if($user == $valid['user']){
                header("Location: ../cad-user.php?status=valid");
            }else{
                
                $insert = "INSERT INTO adm (name, description, user, password, level) VALUE ('$nome', '$description', '$user', '$password', '$level')";
                $query = mysqli_query($conn, $insert);
                
                if($query == true){
                    header("Location:../user-list.php?status=true");
                }else {
                    header("Location:../user-list.php?status=false");
                    
                    echo $conn -> error;
                }
            }

        break;
        
        case "update":

            $nome = $_POST['name'];
            $description = $_POST['description'];
            $user = $_POST['user'];
            $password = $_POST['password'];
            $level = $_POST['level'];

            $update = "UPDATE adm SET name='$nome', description='$description', user='$user', password='$password', level='$level' WHERE id=$id";
            $query = mysqli_query($conn, $update);

            if($query == true){
                header("Location:../user-list.php?status=update");
            }else{
                echo "Erro ao fazer update";

                echo $conn -> error;
            }

        break;

        case "delete":

            $delete = "DELETE FROM adm WHERE id=$id";
            $query = mysqli_query($conn, $delete);

            if($query == true){
                header("Location:../user-list.php?status=del");
            }else{
                echo "Erro ao deletar usuário";

                echo $conn -> error;
            }

        break;

        case "invalid":
            header("Location: ../login.phhp");
        break;
    }

    mysqli_close($conn);

?>