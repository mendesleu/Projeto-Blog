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
                
                <!--Form ==============================================================================-->
                <form method="post" action="#">
                    
                    <input type="text" name="title" placeholder="Titulo" required class="inputs-class">
                    
                    <input type="date" name="date" placeholder="Data" required style="margin-top: 10px; height: 50px; padding-left: 10px; border: 1px solid black;"> <br>
                    
                    <input type="file" name="thumb" placeholder="Capa" required style="margin: 10px 0 10px 0;">
                    
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
                <!--Form ==============================================================================-->

            </div>
            <!--Form Area =============================================================================-->

        </article>
        <!--Container Content =========================================================================-->

    </main>
    <!--Main ==========================================================================================-->

</html>