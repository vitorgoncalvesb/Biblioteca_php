<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
        rel="stylesheet" />

</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg w-full">
        <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-2">Biblioteca</h1>

        <h2 class="text-xl font-semibold text-center text-gray-600 mb-6">Vitor Gonçalves</h2>

        <h3 class="text-xl font-semibold text-center text-gray-600 mb-6">Cadastro de livros</h3>

        <form action="#" method="POST">
            <div class="mb-4">
                <label for="nome" class="block text-gray-700 font-semibold mb-2">Título</label>
                <input type="text" id="nome" name="nome" placeholder="Digite o título do livro"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300 ease-in-out" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Gênero</label>
                <input type="email" id="email" name="email" placeholder="Digite o gênero do livro"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300 ease-in-out" required>
            </div>

            <div class="mb-4">
                <label for="nome" class="block text-gray-700 font-semibold mb-2">Autor</label>
                <input type="text" id="nome" name="nome" placeholder="Digite o autor do livro"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300 ease-in-out" required>
            </div>

            <div class="mb-4">
                <label for="nome" class="block text-gray-700 font-semibold mb-2">Ano</label>
                <input type="text" id="nome" name="nome" placeholder="Digite o ano de lançamento do livro"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300 ease-in-out" required>
            </div>

            <div class="mb-4">
                <label for="nome" class="block text-gray-700 font-semibold mb-2">Páginas</label>
                <input type="text" id="nome" name="nome" placeholder="Digite o número de páginas do livro"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300 ease-in-out" required>
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-indigo-600 text-white font-bold py-3 px-4 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-300 ease-in-out">
                    Enviar
                </button>
            </div>
        </form>
        <div class="mt-4">
            <a href="index.php"
               class="block w-full text-center bg-gray-200 text-gray-800 font-bold py-3 px-4 rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition duration-300 ease-in-out">
                Voltar para o Início
            </a>
        </div>
    </div>
    

</body>

</html>