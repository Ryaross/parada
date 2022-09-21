<?php
include('../components/biblioteca.php');
if(isset($_GET['delete'])){
    $cd = (int)$_GET['delete'];
    ExcluirLivro($cd);
}
?>

<div class="cadastropainel">
        <h3 class="funcao">Cadastrar livro</h3>
        <form action="" method="post" class="form" name="autor" enctype="multipart/form-data">
            <div>
                <div><input class="inputcadas" type="text" name="titulo" id="titulo" placeholder="Digite o título do livro: "></div>
                <label class="nomecad" for="ano">Ano do livro:</label>
                <input class="inputcadas" type="date" name="ano" id="ano">
                <div>
                    <input class="inputcadas" type="text" name="classificacao" id="classificacao" placeholder="Classificação do livro:">
                    <input class="inputcadas" type="text" name="estado" id="estado" placeholder="Digite o estado do livro:">
                </div>
                <div>
                    <input class="inputcadas" type="text" name="editora" id="editora" placeholder="Digite o código da editora:">
                    <input class="inputcadas" type="text" name="genero" id="genero" placeholder="Digite o código do gênero:">
                </div>
                <div>
                    <input class="inputcadas" type="text" name="isbn" id="isbn" placeholder="ISBN do livro:">
                    <input class="inputcadas" type="text" name="quantidade" id="quantidade" placeholder="Quantidade de livros:">
                </div>
                <div>
                    <input class="inputcadas" type="text" name="sinopse" id="sinopse" placeholder="Sinopse do livro:">
                    <input class="inputcadas" type="text" name="capa" id="capa" placeholder="Link da capa do livro:">
                </div>
                    <input class="" type="file" name="capa" id="capa">
                    <br>
                    <label for="autor">Autor(eu):</label>
                    
                    <?php
                        $autores = ListarAutor(0);
                        while ($a = $autores->fetch_object()){
                            echo '<br><input type="checkbox" name="autores[]" value="'.$a->cd.'">'.$a->nome;
                        }
                    ?>
            </div>
            <button class="botcada" name="livro">Cadastrar</button>
        </form>
    </div>

    <?php
    echo "<div>
            <h3>Livros cadastrados: </h3>
            <table id='TabMostrarLivro'>
                <tr>
                    <th>Código</th>
                    <th>ISBN</th>
                    <th>Título</th>
                    <th>Ano</th>
                    <th>Classificação</th>
                    <th>Sinopse</th>
                    <th>Editora</th>
                    <th>Genero</th>
                    <th>Quantidade</th>
                    <th>Estado</th>
                    <th>Excluir</th>
                </tr>";
                MostrarLivro(0);
    echo "</table>
        </div>";

    if($_POST){
        if(isset($_POST['livro'])){
            $resultado = CadastrarLivro($_POST['isbn'],$_POST['titulo'],$_POST['ano'],$_POST['quantidade'],$_POST['sinopse'],$_POST['classificacao'],$_POST['editora'],$_POST['genero'],$_POST['estado'], $_POST['capa'], $_POST['autores']);
        }
    }
?>
