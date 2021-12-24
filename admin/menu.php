    <?php

        session_start();
    
        if(!isset($_SESSION['user_ok']) AND !isset($_SESSION['password_ok'])){
            header("Location: login.php");
        }
    
    ?>

    <header id="top">
        <nav>
            <ul>
                <li><a href="list-post.php">Postagens</a></li>
                <li><a href="user-list.php">User</a></li>
                <li><a href="category.php">Categoria</a></li>
                <li><a href="publicity.php">Puclicidade</a></li>
                <li><a href="function/login.php">Logout</a></li>
            </ul>
        </nav>
    </header>