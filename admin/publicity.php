<?php
    // Login
    session_start();

    require_once "function/conn.php";

    $user = $_SESSION['user_ok'];
    $password = $_SESSION['password_ok'];

    $select = "SELECT * FROM adm WHERE user = '$user' AND password = '$password'";
    $query = mysqli_query($conn, $select);
    while($listar = mysqli_fetch_array($query)){
    }

    if(!isset($_SESSION['user_ok']) AND !isset($_SESSION['password_ok'])){
        header('Location: login.php');
    }
    // Login

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Publicidade</title>

    <link rel="stylesheet" media="all" type="text/css" href="../css/style-admin.css">

</head>
<body>

    <?php 

        $status = isset($_GET['status'])?$_GET['status']:"";

        include "function/status-post.php";
    ?>
    <!--Avisos ========================================================================================-->
    
    <!--Header ========================================================================================-->
    <?php include "menu.php"; ?>
    <!--Header ========================================================================================-->
    
    <!--Main ==========================================================================================-->
    <main>

        
        <!--Article ===================================================================================-->
        <article id="container-content">

            <style>

                form{
                    width: 400px;
                    margin-bottom: 30px;
                }

                .button{
                    width: 100px;
                    height: 30px;
                    background-color: black;
                    color: white;
                    margin-top: 10px;
                }

            </style>

            <div>

                <?php 
            
                    for($c = 1; $c <=5; $c++){
                
                    $select = "SELECT * FROM publicity WHERE id=$c";
                    $query = mysqli_query($conn, $select);
                
                    if($query == true){
                        if($pub = $query -> fetch_assoc()){
                        
                ?>

                        <form action="function/cad-publi.php?id=<?php echo $pub['id'] ?>&nome=<?php echo $pub['publicity'] ?>" method="POST" enctype="multipart/form-data">
                            <label>Banner <?php echo $c ?></label><br>
                            <input type="file" name="banner-<?php echo $c ?>" value="<?php echo $pub['publicity'] ?>">
                            <input type="submit" class="button" value="Alterar">
                        </form>

                <?php
                        }
                    }
                }
                
                mysqli_close($conn)
                ?>

            </div>          

        </article>
        <!--Article ===================================================================================-->
        
    </main>
    <!--Main ==========================================================================================-->



</body>
</html>