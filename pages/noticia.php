<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>

    <link rel="stylesheet" media="all" type="text/css" href="../css/style.css">
    <link rel="stylesheet" media="all" type="text/css" href="../css/noticia.css">

</head>
<body>

    <!--Header ========================================================================================-->
    <header>
        <div id="container-header">
            <div id="logo">
                <img src="../img/logo.png" width="100%" alt="logo">
            </div>
            <form action="#" method="post" id="form-search">
                <input type="text" name="search" id="search-input">
                <button type="submit" id="search-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>
        </div>

        <nav>
            <ul>
                <li><a href="">Esportes</a></li>
                <li><a href="">Tecnologia</a></li>
                <li><a href="">Moda</a></li>
                <li><a href="">Saúde</a></li>
                <li><a href="">Música</a></li>
                <li><a href="">Humor</a></li>
                <li><a href="">Curiosidades</a></li>
                <li><a href="">Culinária</a></li>
                <li><a href="">Economia</a></li>
            </ul>
        </nav>
    </header>
    <!--Header ========================================================================================-->
    
    <main>

        <!--Contet ====================================================================================-->
        <article id="container-content">

        <?php
            require_once "../admin/function/conn.php";

            $not = isset($_GET['not'])?$_GET['not']:"";
            $id = isset($_GET['id'])?$_GET['id']:"";

            $select = "SELECT * FROM posts WHERE id=$id";
            $query = mysqli_query($conn, $select);

            if($query == true){
                if($row = $query->fetch_assoc()){
        ?>
            <section id="title">
                <p>
                    <?php echo $row['title']; ?>
                </p>
            </section>

            <section id="container-author-date">
                <label>Autor: <?php echo $row['author']; ?></label>
                <div style="display: flex; align-items: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                    <label style="margin-left: 10px;"><?php echo $row['date']; ?></label>
                </div>
            </section>
            
            <section id="container-photo">
                <div id="photo"><?php echo $row['thumb']; ?></div>
            </section>

            <section id="text">
                <p>
                    <?php echo $row['post']; ?>
                </p>
            </section>
            <?php
                }
            }

            mysqli_close($conn);
            ?>

        </article>
        <!--Contet ====================================================================================-->
        
        <div style="width: 150px;"></div><!--Space-->

        <!--Aside =====================================================================================-->
        <aside></aside>
        <!--Aside =====================================================================================-->
        
    </main>
    
</body>
</html>