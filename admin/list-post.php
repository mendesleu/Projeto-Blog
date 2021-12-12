<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Posts</title>

    <link rel="stylesheet" media="all" type="text/css" href="../css/cad-post.css">
    <link rel="stylesheet" media="all" type="text/css" href="../css/style-admin.css">

</head>
<body>
    
    <!--Header ========================================================================================-->
    <?php include "menu.php"; ?>
    <!--Header ========================================================================================-->
    
    <!--Main ==========================================================================================-->
    <main>

        
        <!--Article ===================================================================================-->
        <article id="container-content">
            
            <!--Header ================================================================================-->
            <header id="header-section">
                <a href=""><input type="button" value="Cadastrar" id="cad-button"></a>
                <div id="line"></div>
            </header>
            <!--Header ================================================================================-->

            <!--Section ===============================================================================-->
            <section id="container-post">

                <!--Box-Info ==========================================================================-->
                <div class="box-info " style="margin: 10px 0 0 0;">
                    <div class="name-separate">Postagem:</div>
                    <div class="icon-separate">Alterar:</div>
                    <div class="icon-separate">Deletar:</div>
                </div>
                <div class="line2" style="margin-bottom: 10px;"></div>
                <!--Box-Info ==========================================================================-->

                
                <!--Box-Info While ====================================================================-->
                <div class="box-info">
                    <div class="name-separate">
                        <a href="../pages/noticia.html" style="color: black;">Nome da postagem aqui</a>
                    </div>
                    
                    <!--Update ========================================================================-->
                    <div class="icon-separate">
                        <a href="" style="color: black;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                            </svg>
                        </a>
                    </div>
                    <!--Update ========================================================================-->
                    
                    <!--Delete ========================================================================-->
                    <div class="icon-separate">
                        <a href="" style="color: black;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </a>
                    </div>                    
                    <!--Delete ========================================================================-->
                </div>      
                <div class="line2"></div>          
                <!--Box-Info While ====================================================================-->
                
            </section>
            <!--Section ===============================================================================-->

        </article>
        <!--Article ===================================================================================-->
        
    </main>
    <!--Main ==========================================================================================-->



</body>
</html>