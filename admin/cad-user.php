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
    <title>Cadastro de Usuário</title>

    <link rel="stylesheet" media="all" type="text/css" href="../css/style-admin.css" />
    <link rel="stylesheet" media="all" type="text/css" href="../css/cad-user.css" />

</head>
<body>

    <?php include "menu.php"; ?>
    <!--Header ========================================================================================-->
    
    <!--Main ==========================================================================================-->
    <main>
        
        <!--Container Content =========================================================================-->
        <article id="container-content">
            
            <!--Form Area =============================================================================-->
            <div id="form-area">
            
                <?php

                    $func = isset($_GET['func'])?$_GET['func']:"";
                    $id = isset($_GET['id'])?$_GET['id']:"";

                    if($func == "update"){

                        $select = "SELECT * FROM adm WHERE id=$id";
                        $query = mysqli_query($conn, $select);

                        if($query == true){
                            if($up = $query -> fetch_assoc()){
                            
                ?>

                <!--Form ==============================================================================-->
                <form action="function/user.php?func=update&id=<?php echo $up['id'] ?>" method="POST">

                    <input type="text" name="name" placeholder="Nome" required class="inputs-class" value="<?php echo $up['name'] ?>">
                    
                    <textarea name="description" placeholder="Descrição"><?php echo $up['description'] ?></textarea>
                    
                    <input type="text" name="user" placeholder="Usuário" required class="inputs-class" value="<?php echo $up['user'] ?>">
                    
                    <input type="password" name="password" placeholder="Senha:" required class="inputs-class" value="<?php echo $up['password'] ?>">
                    
                    <select name="level" required>
                        <option value="<?php echo $up['level'] ?>"><?php echo $up['level'] ?></option>
                        <option value="administrador">Administrador</option>
                        <option value="editor">Editor</option>
                        <option value="colunista">Colunista</option>
                    </select>
                    
                    <input type="submit" value="Cadastrar" id="button">
                </form>
                <?php
                            }
                        }
                    }else{
                ?>
                        <form action="function/user.php?func=insert" method="POST">
                        <input type="text" name="name" placeholder="Nome" required class="inputs-class">
                    
                        <textarea name="description" placeholder="Descrição"></textarea>
                    
                        <input type="text" name="user" placeholder="Usuário" required class="inputs-class">
                    
                        <input type="password" name="password" placeholder="Senha:" required class="inputs-class">
                    
                        <select name="level" required>
                            <option value="Nível">Selecione o nível</option>
                            <option value="administrador">Administrador</option>
                            <option value="editor">Editor</option>
                            <option value="colunista">Colunista</option>
                        </select>
                    
                        <input type="submit" value="Cadastrar" id="button">
                        </form>
                <?php
                    }
                ?>
                <!--Form ==============================================================================-->
                
            </div>
            <!--Form Area =============================================================================-->

        </article>
        <!--Container Content =========================================================================-->

    </main>
    <!--Main ==========================================================================================-->
    

</body>
</html>