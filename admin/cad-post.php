<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Postagens</title>
    
    <link rel="stylesheet" media="all" type="text/css" href="../css/cad-post.css">
    <link rel="stylesheet" media="all" type="text/css" href="../css/style-admin.css">

</head>
<body>
    
</body>

    <!--Header ========================================================================================-->
    <?php include "menu.php"; ?>
    <!--Header ========================================================================================-->
    
    <!--Main ==========================================================================================-->
    <main>
        
        <!--Container Content =========================================================================-->
        <article id="container-content">

            
            <!--Form Area =============================================================================-->
            <div id="form-area">
                
                <?php

                    require_once "function/conn.php";
                    
                    $func = isset($_GET['func'])?$_GET['func']:"";
                    $id = isset($_GET['id'])?$_GET['id']:"";

                    if($func == "update"){

                        $select = "SELECT * FROM posts WHERE id = $id";
                        $query = mysqli_query($conn, $select);

                        if($query == true){
                            if($up = $query -> fetch_assoc()){


                ?>
                <!--Form ==============================================================================-->
                <form method="post" action="function/cad-post.php?func=update&id=<?php echo $id ?>">
                    
                    <input type="text" name="title" placeholder="Titulo" required class="inputs-class" value="<?php echo $up['title'] ?>">
                     
                    <input type="file" name="thumb" placeholder="Capa" style="margin: 10px 0 10px 0;" value="<?php echo $up['thumb'] ?>">
                    
                    <input type="text" name="author" placeholder="Autor" required class="inputs-class" value="<?php echo $up['author'] ?>">
                    
                    <select name="category">
                        <option value="<?php echo $up['category'] ?>"><?php echo $up['category'] ?></option>
                        <option value="tecnologia">Tecnologia</option>
                        <option value="esportes">Esportes</option>
                        <option value="politica">Politica</option>
                        <option value="saude">Saude</option>
                    </select>
                    
                    <textarea name="post"><?php echo $up['post'] ?></textarea>

                    <input type="submit" value="Cadastrar" id="button">
                    
                </form>
                <?php

                            }
                        }
                    }else{
                ?>

                        <form method="post" action="function/cad-post.php?func=insert">
                    
                        <input type="text" name="title" placeholder="Titulo" required class="inputs-class">

                        <!-- <input type="date" name="date" placeholder="Data" required style="margin-top: 10px; height: 50px; padding-left: 10px; border: 1px solid black;"> <br> -->

                        <input type="file" name="thumb" placeholder="Capa" style="margin: 10px 0 10px 0;">

                        <input type="text" name="author" placeholder="Autor" required class="inputs-class">

                        <select name="category">
                            <option value="categoria">Categoria</option>
                            <option value="tecnologia">Tecnologia</option>
                            <option value="esportes">Esportes</option>
                            <option value="politica">Politica</option>
                            <option value="saude">Saude</option>
                        </select>

                        <textarea name="post"></textarea>

                        <input type="submit" value="Cadastrar" id="button">

                        </form>
                <?php
                        }
                ?>

            </div>
            <!--Form Area =============================================================================-->

        </article>
        <!--Container Content =========================================================================-->

    </main>
    <!--Main ==========================================================================================-->

</html>