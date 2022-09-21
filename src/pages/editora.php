<?php include('../components/biblioteca.php'); ?>

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
                <h2>Editoras Cadastradas</h2>
                <p>Você pode adicionar, visualizar e editar novas editoras.</p>
            </div>

            <div class="modalContainer">
                <button class="btnAdd" id="open-modal"><i class="fa-solid fa-plus"></i> Adicionar Editora</button>
                <div id="fade" class="hide"></div>

                <div id="modal" class="hide">
                    <div class="modal-header">
                        <h2>Cadastrar Editora</h2>
                        <button id="close-modal"><i class="fa-solid fa-xmark"></i></button>
                    </div>

                    <div class="modal-body">
                        <form method="POST">
                            <input type="text" name="editora" id="editora" placeholder="Digite uma Editora">
                            <input type="submit" id="enviar" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>

            <?php
                if(isset($_POST['editora'])){
                    CadastrarEditora($_POST['editora']);
                }
            ?>

            <br>
                
            <table>
                <tr>
                    <th>Editora</th>
                    <th>Ações</th>
                </tr>
                <?php
                    if(isset($_GET['excluir_listEdit'])){
                        ExcluirEditora($_GET['excluir_listEdit']);
                    }

                    $funcEdit = ExibirEditora("");
                    while($listEdit = $funcEdit->fetch_object()){
                        echo '<tr>
                                <td>'.$listEdit->nome.'</td>
                                <td><a href="?excluir_listEdit='.$listEdit->cd.'"><i class="fa-solid fa-trash-can"></i></a></td>                  
                              </tr>';
                    }
                ?>
            </table>
        </div>
    </div>

    <script src="../components/modal.js"></script>
    <script src="https://kit.fontawesome.com/07cc412226.js" crossorigin="anonymous"></script>