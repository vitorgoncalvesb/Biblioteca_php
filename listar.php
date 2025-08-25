<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acervo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <?php include_once 'pedaco.php'; ?>

    <h2 class="text-center my-4">Lista de livros disponíveis</h2>

    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Gênero</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Páginas</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'conexao.php';
                $sql = "SELECT * FROM livros";
                $stmt = $pdo->query($sql);

                while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<th scope='row'>" . htmlspecialchars($livro['id']) . "</th>";
                    echo "<td>" . htmlspecialchars($livro['titulo']) . "</td>";
                    echo "<td>" . htmlspecialchars($livro['genero']) . "</td>";
                    echo "<td>" . htmlspecialchars($livro['autor']) . "</td>";
                    echo "<td>" . htmlspecialchars($livro['ano']) . "</td>";
                    echo "<td>" . htmlspecialchars($livro['paginas']) . "</td>";
                    echo
                        "<td>
                        <div class='btn-group' role='group'>
                            <a href='form_atualizar.php?id=" . htmlspecialchars($livro['id']) . "' class='btn btn-primary'>Atualizar</a>
                            <a href='excluir.php?id=" . htmlspecialchars($livro['id']) . "' class='btn btn-danger' onclick=\"return confirm('Tem certeza que deseja excluir este livro?');\">Excluir</a>
                        </div>
                        </td>";
                    echo "</tr>";

                }
                ?>
            </tbody>
        </table>

        <div class="d-grid gap-2 d-md-block my-3">
            <a href="index.php" class="btn btn-secondary">Voltar</a>
            <a href="form_cadastro.php" class="btn btn-secondary">Cadastrar Livro</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>