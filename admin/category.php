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
    <title>Categoria</title>

    <link rel="stylesheet" media="all" type="text/css" href="../css/style-admin.css">
    <link rel="stylesheet" media="all" type="text/css" href="../css/category.css">
    
</head>
<body>

    <!--Box Confirm White =============================================================================-->
    <?php
        include "function/status-category.php";
    ?> 
    <!--Box Confirm White =============================================================================-->

    <!--Header ========================================================================================-->
        <?php include "menu.php" ?>
    <!--Header ========================================================================================-->
    
    <!--Main ==========================================================================================-->
    <main>

        <!--Container Content =========================================================================-->
        <section id="container-content">
            
            <!--Register Area =========================================================================-->
            <div id="register-area">
            
                <!--Insert And Update =================================================================-->
                <?php

                    $update = isset($_GET['update'])?$_GET['update']:"";
                    $id = isset($_GET['id'])?$_GET['id']:"";

                    if($update == "ok"){  
                        $select_up = "SELECT * FROM category WHERE id=$id";    
                        $query = mysqli_query($conn, $select_up);
                        
                        if($query == true){
                            if($cat = $query->fetch_assoc()){
                ?>

                <form method="post" action="function/category.php?func=update&id=<?php echo $id?>">
                    <label style="font-size: 10pt;">Cadastrar categoria:</label><br>
                    <input type="text" name="category" placeholder="Categoria:" id="input" value="<?php echo $cat['category'] ?>">
                    <br>
                    <input type="submit" value="Cadastrar" id="button">
                </form>                      
                <?php
                            }
                        }
                    }else{
                ?>  
                <form method="post" action="function/category.php?func=insert">
                    <label style="font-size: 10pt;">Cadastrar categoria:</label><br>
                    <input type="text" name="category" placeholder="Categoria:" id="input">
                    <br>
                    <input type="submit" value="Cadastrar" id="button">
                </form>                    
                <?php
                    }
                ?>                  
                <!--Insert And Update =================================================================-->   
            </div>
            <div id="line"></div>
            <!--Register Area =========================================================================-->
            
            <!--Container List ========================================================================-->
            <div id="container-list">

                
                <!--Cat-info ==========================================================================-->
                <div class="cat-info" style="margin-top: 10px;">
                    <div class="separate-cat">Categoria</div>
                    <div class="icon-separate">Alterar</div>
                    <div class="icon-separate">Deletar</div>
                </div>
                <div class="line" style="margin-bottom: 10px;"></div>
                <!--Cat-info ==========================================================================-->
                
                <!--Select ============================================================================-->
                <?php

                    $select = "SELECT * FROM category";
                    $query = mysqli_query($conn, $select);

                    if($query == true){
                        while($cat = $query->fetch_assoc()){

                      
                ?>
                <!--Select ============================================================================-->
                
                <!--Cat-info ==========================================================================-->
                <div class="cat-info">
                    
                    <div class="separate-cat"><?php echo $cat['category'] ?></div>
                    
                    <!--Update ========================================================================-->
                    <div class="icon-separate">
                        <a href="category.php?update=ok&id=<?php echo $cat['id'] ?>" style=" color: black;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                            </svg>
                        </a>
                    </div>
                    <!--Update ========================================================================-->
                    
                    <!--Delete ========================================================================-->
                    <div class="icon-separate">
                        <a href="function/category.php?func=delete&id=<?php echo $cat['id'] ?>" style="color: black;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </a>
                    </div>                    
                    <!--Delete ========================================================================-->
                </div>
                <div class="line"></div>                
                <!--Cat-info ==========================================================================-->

                <?php
                        }
                    }

                    mysqli_close($conn)
                ?>
                
            </div>
            <!--Container List ========================================================================-->
                
                
        </section>
        <!--Container Content =========================================================================-->

    </main>
    <!--Main ==========================================================================================-->
    
</body>
</html>