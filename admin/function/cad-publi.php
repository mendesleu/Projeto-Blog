<?php
    
    $id = isset($_GET['id'])?$_GET['id']:"invalid";
    $name = isset($_GET['nome'])?$_GET['nome']:"";
    echo $name;

    require_once "conn.php";

    switch($id){

        case 1:
                
            if(isset($_FILES['banner-1'])){
                    
                $extensao = strtolower(substr($_FILES['banner-1']['name'], -4)); //Capta a extensão do arquivo
                $banner_name = md5(time()). $extensao; // Muda o nome do arquivo
                $diretorio = "../../img/publi/"; // Diretorio onde será salvo o arquivo
                    
                move_uploaded_file($_FILES['banner-1']['tmp_name'], $diretorio.$banner_name); // Vai mover o arquivo para o diretorio
                }

            $insert = "UPDATE publicity SET publicity = '$banner_name' WHERE id = 1";
            $query = mysqli_query($conn, $insert);

            if($insert == true){
                echo "gravação ok";
            }else{
                echo "erro ao gravar";
                echo $conn -> error;
            }

            $dir = "../../img/publi/$name";

            if(file_exists($dir)){
                unlink($dir);
            }

        break;

        case 2:
                
            if(isset($_FILES['banner-2'])){
                    
                $extensao = strtolower(substr($_FILES['banner-2']['name'], -4)); //Capta a extensão do arquivo
                $banner_name = md5(time()). $extensao; // Muda o nome do arquivo
                $diretorio = "../../img/publi/"; // Diretorio onde será salvo o arquivo
                    
                move_uploaded_file($_FILES['banner-2']['tmp_name'], $diretorio.$banner_name); // Vai mover o arquivo para o diretorio
                }

            $insert = "UPDATE publicity SET publicity = '$banner_name' WHERE id = 2";
            $query = mysqli_query($conn, $insert);

            if($insert == true){
                echo "gravação ok";
            }else{
                echo "erro ao gravar";
                echo $conn -> error;
            }

            $dir = "../../img/publi/$name";

            if(file_exists($dir)){
                unlink($dir);
            }

        break;

        case 3:
                
            if(isset($_FILES['banner-3'])){
                    
                $extensao = strtolower(substr($_FILES['banner-3']['name'], -4)); //Capta a extensão do arquivo
                $banner_name = md5(time()). $extensao; // Muda o nome do arquivo
                $diretorio = "../../img/publi/"; // Diretorio onde será salvo o arquivo
                    
                move_uploaded_file($_FILES['banner-3']['tmp_name'], $diretorio.$banner_name); // Vai mover o arquivo para o diretorio
                }

            $insert = "UPDATE publicity SET publicity = '$banner_name' WHERE id = 3";
            $query = mysqli_query($conn, $insert);

            if($insert == true){
                echo "gravação ok";
            }else{
                echo "erro ao gravar";
                echo $conn -> error;
            }

            $dir = "../../img/publi/$name";

            if(file_exists($dir)){
                unlink($dir);
            }

        break;
        
        case 4:
                
            if(isset($_FILES['banner-4'])){
                    
                $extensao = strtolower(substr($_FILES['banner-4']['name'], -4)); //Capta a extensão do arquivo
                $banner_name = md5(time()). $extensao; // Muda o nome do arquivo
                $diretorio = "../../img/publi/"; // Diretorio onde será salvo o arquivo
                    
                move_uploaded_file($_FILES['banner-4']['tmp_name'], $diretorio.$banner_name); // Vai mover o arquivo para o diretorio
                }

            $insert = "UPDATE publicity SET publicity = '$banner_name' WHERE id = 4";
            $query = mysqli_query($conn, $insert);

            if($insert == true){
                echo "gravação ok";
            }else{
                echo "erro ao gravar";
                echo $conn -> error;
            }

            $dir = "../../img/publi/$name";

            if(file_exists($dir)){
                unlink($dir);
            }

        break;

        case 5:
                
            if(isset($_FILES['banner-5'])){
                    
                $extensao = strtolower(substr($_FILES['banner-5']['name'], -4)); //Capta a extensão do arquivo
                $banner_name = md5(time()). $extensao; // Muda o nome do arquivo
                $diretorio = "../../img/publi/"; // Diretorio onde será salvo o arquivo
                    
                move_uploaded_file($_FILES['banner-5']['tmp_name'], $diretorio.$banner_name); // Vai mover o arquivo para o diretorio
                }

            $insert = "UPDATE publicity SET publicity = '$banner_name' WHERE id = 5";
            $query = mysqli_query($conn, $insert);

            if($insert == true){
                echo "gravação ok";
            }else{
                echo "erro ao gravar";
                echo $conn -> error;
            }

            $dir = "../../img/publi/$name";

            if(file_exists($dir)){
                unlink($dir);
            }

        break;

        case "invalid":
            header("Location: ../login.php");
        break;
    }

?>