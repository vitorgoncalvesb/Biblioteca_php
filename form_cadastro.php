<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once 'pedaco.php';
    ?>
    
    <h2 style="text-align: center">Cadastro de livros</h2>
    <div class="container">
        <form action = "inserir.php" method = "POST">
            <div class="mb-3">
                <input type="Text" class="form-control" placeholder="Digite o titulo do livro..." name = "titulo">
            </div>
            <div class="mb-3">
                <input type="Text" class="form-control" placeholder="Digite o gênero do livro..." name = "genero">
            </div>
            <div class="mb-3">
                <input type="Text" class="form-control" placeholder="Digite o nome do autor..." name = "autor">
            </div>
            <div class="mb-3">
                <input type="Text" class="form-control" placeholder="Digite o ano de lançamento..." name = "ano">
            </div>
            <div class="mb-3">
                <input type="Text" class="form-control" placeholder="Digite o número de páginas..." name = "paginas">
            </div>
            <div>
                <a href="index.php" type="button" class="btn btn-secondary">Voltar</a>
                <a href="listar.php" type="button" class="btn btn-secondary">Acervo </a>
                <button type="submit" class="btn btn-secondary">Cadastrar</button>
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>