<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once 'pedaco.php'
    ?>
    <main class="p-6 max-w-6xl mx-auto">
        <h2 class="text-2xl font-bold mb-6">Lista de livros disponíveis</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 text-sm">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="px-4 py-3 text-left font-medium border-b">ID</th>
                        <th class="px-4 py-3 text-left font-medium border-b">Título</th>
                        <th class="px-4 py-3 text-left font-medium border-b">Gênero</th>
                        <th class="px-4 py-3 text-left font-medium border-b">Autor</th>
                        <th class="px-4 py-3 text-left font-medium border-b">Ano</th>
                        <th class="px-4 py-3 text-left font-medium border-b">Páginas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 border-b">1</td>
                        <td class="px-4 py-3 border-b">Dom Casmurro</td>
                        <td class="px-4 py-3 border-b">Romance</td>
                        <td class="px-4 py-3 border-b">Machado de Assis</td>
                        <td class="px-4 py-3 border-b">1899</td>
                        <td class="px-4 py-3 border-b">256</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 border-b">2</td>
                        <td class="px-4 py-3 border-b">O Cortiço</td>
                        <td class="px-4 py-3 border-b">Naturalismo</td>
                        <td class="px-4 py-3 border-b">Aluísio Azevedo</td>
                        <td class="px-4 py-3 border-b">1890</td>
                        <td class="px-4 py-3 border-b">320</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="flex gap-4 mt-5 ml-5">
            <a href="index.php" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                Voltar
            </a>

            <a href="form_cadastro.php" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">
                Cadastrar livro
            </a>
        </div>
        <main class="p-6 max-w-6xl mx-auto">
</body>

</html>