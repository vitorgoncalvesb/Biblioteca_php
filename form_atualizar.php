<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <?php
    include_once 'pedaco.php';
    require_once 'conexao.php';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $genero = $_POST['genero'];
        $autor = $_POST['autor'];
        $ano = $_POST['ano'];
        $paginas = $_POST['paginas'];

        $sql = "UPDATE livros SET titulo = ?, genero = ?, autor = ?, ano = ?, paginas = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $atualizado = $stmt->execute([$titulo, $genero, $autor, $ano, $paginas, $id]);

        if ($atualizado) {
            echo "<div class='alert alert-success text-center'>Livro atualizado com sucesso!</div>";
            header("refresh:1.5;url=listar.php");
            exit;
        } else {
            echo "<div class='alert alert-danger text-center'>Erro ao atualizar o livro.</div>";
            $livro = [
                'id' => $id,
                'titulo' => $titulo,
                'genero' => $genero,
                'autor' => $autor,
                'ano' => $ano,
                'paginas' => $paginas
            ];
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM livros WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $livro = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$livro) {
            echo "<div class='alert alert-danger text-center'>Livro não encontrado.</div>";
            exit;
        }
    }
    ?>




    <h2 style="text-align: center">Atualização de informação de livros</h2>
    <div class="container">
        <form action="#" method="POST">

            <input type="hidden" name="id" value="<?= htmlspecialchars($livro['id']) ?>">

            <div class="mb-3">
                <input type="text" class="form-control" name="titulo" value="<?= htmlspecialchars($livro['titulo']) ?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="genero" value="<?= htmlspecialchars($livro['genero']) ?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="autor" value="<?= htmlspecialchars($livro['autor']) ?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="ano" value="<?= htmlspecialchars($livro['ano']) ?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="paginas"
                    value="<?= htmlspecialchars($livro['paginas']) ?>">
            </div>
            <div>
                <a href="index.php" type="button" class="btn btn-secondary">Voltar</a>
                <a href="listar.php" type="button" class="btn btn-secondary">Acervo </a>
                <button type="submit" class="btn btn-secondary">Atualizar</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>