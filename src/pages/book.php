<?php header ("Acess-Control-Aloww-Origin: *");
      include ('../components/biblioteca.php'); ?>

    <link rel="stylesheet" href="../styles/cadastros.css">

    <div class="container">
        <nav class="navbar">
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
                <li>
                    <a href="#">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Log out</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="containerGen">
            <div class="header">
                <h2>Livros Cadastrados</h2>
                <p>Você pode adicionar, visualizar e editar novos livros.</p>
            </div>

            <div class="modalContainer">
                <button class="btnAdd" id="open-modal"><i class="fa-solid fa-plus"></i> Adicionar Livro</button>
                <div id="fade" class="hide"></div>

                <div id="modal" class="hide">
                    <div class="modal-header">
                        <h2>Cadastrar Livro</h2>
                        <button id="close-modal"><i class="fa-solid fa-xmark"></i></button>
                    </div>

                    <div class="modal-body">
                        <form method="POST">
                            <input type="number" name="isbn" id="isbn" placeholder="Isbn">
                            <input type="text" name="titulo" id="titulo" placeholder="Titulo">
                            <input type="number" name="ano" id="ano" placeholder="Ano">
                            <input type="number" name="qtd" id="qtd" placeholder="Qtd">
                            <textarea name="sinopse" id="sinopse" cols="60" rows="10" placeholder="sinopse"></textarea>
                            <input type="text" name="classificacao" id="classificacao">
                            <input type="text" name="ge" id="ge" placeholder="Digite nada n ta pegamdo">
                            <input type="submit" id="enviar" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>

            <br>
                
            <table>
                <tr>
                    <th>Cd</th>
                    <th>Título</th>
                    <th>Edidora</th>
                    <th>Gênero</th>
                    <th>Quantidade</th>
                </tr>
                <?php
                    $todos = ListarLivro("");
                    while($book = $todos->fetch_object()){
                        echo '
                        <tr>
                            <td>'.$book->cd.'</td>
                            <td class="titulo">'.$book->titulo.'</td>
                            <td>'.$book->id_editora.'</td>
                            <td>'.$book->id_genero.'</td>
                            <td>'.$book->qtd.'</td>
                        </tr>
                    ';
                    }
                ?>
            </table>
        </div>
    </div>

    <script src="../components/modal.js"></script>
    <script src="https://kit.fontawesome.com/07cc412226.js" crossorigin="anonymous"></script>