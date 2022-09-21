<?php include('../components/biblioteca.php'); ?>

    <link rel="stylesheet" href="../styles/homeAdm.css">

    <div class="container">
        <nav class="navbar">
            <div class="ul">
                <div class="logoBox"><img src="https://virtuallibrary.profrodolfo.com.br/public/logoW.png" alt="virtuallibrary"></div>
                <ul>
                    <li>
                        <a href="homeAdm.php">
                            <i class="fa-solid fa-house"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="autor.php">
                            <i class="fa-solid fa-user-graduate"></i>
                            <span>Autores</span>
                        </a>
                    </li>
                    <li>
                        <a href="genero.php">
                            <i class="fa-solid fa-address-book"></i>
                            <span>Gêneros</span>
                        </a>
                    </li>
                    <li>
                        <a href="editora.php">
                            <i class="fa-solid fa-marker"></i>
                            <span>Editoras</span>
                        </a>
                    </li>
                    <li>
                        <a href="book.php">
                            <i class="fa-solid fa-book"></i>
                            <span>LIvros</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="logout">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span>Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="containerGen">
            <div class="cards">
                <div class="cardContainer">
                    <i class="fa-solid fa-book-bookmark"></i>
                        <h2>Livros Cadastrados</h2>
                        <?php
                            ExibirQtdLivro();
                        ?>
                    </div>
        
                    <div class="cardContainer">
                        <i class="fa-solid fa-clock"></i>
                        <h2>Livros Pendentes</h2>
                        <?php
                            ExibirQtdEmprestimo();
                        ?>
                    </div>
        
                    <div class="cardContainer">
                        <i class="fa-solid fa-user"></i>
                        <h2>Usuarios Cadastrados</h2>
                        <?php
                            ExibirQtdUser();
                        ?>
                    </div>
        
                    <div class="cardContainer">
                        <i class="fa-solid fa-handshake"></i>
                        <h2>Livros Emprestrados</h2>
                        <?php
                            ExibirQtdEmprestimo();
                        ?>
                    </div>
            </div>
        </div>
    </div>

    <script src="../components/modal.js"></script>
    <script src="https://kit.fontawesome.com/07cc412226.js" crossorigin="anonymous"></script>