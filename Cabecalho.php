<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Filmoteca - Seu acervo de filmes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/Cus.css">

    <script>
        const menuItems = document.querySelectorAll('.menu-list a');

        menuItems.forEach(item => {
            item.addEventListener('click', function() {
                menuItems.forEach(item => {
                    item.classList.remove('clicked');
                });
                this.classList.add('clicked');
            });
        });
    </script>

</head>
<header>
    <div class="logo">
        <img src="imgs/logo.png" alt="Filmoteca">
        <h1>Filmoteca</h1>

        <?php
        session_start();
        if (isset($_SESSION["username"])) {
            echo '<h1>Bem-vindo, ' . $_SESSION["username"] . '</h1>';
            echo '<a href="logout.php" class="btn-logout">Sair</a>';
        } else {
            echo '<h1>Bem-vindo ao Site</h1>';
        }

        if (!isset($_SESSION["username"])) {
            header("Location: Login_e_Cadastro.php");
            exit();
        }
        ?>

    </div>
    <br>
    <nav>
        <ul class="menu-list">
            <li><a href="#">Início</a></li>
            <li><a href="#">Filmes</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </nav>
</header>

<body>