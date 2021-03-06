<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de varejo - Cadastro de fornecedores</title>
</head>
<body>
    <header class="bg-blue-400">
        <ul class="flex">
            <li class="mx-3">
                <a href="../../index.html">Home</a>
            </li>
            <li>
                <a href="#">Novo Fornecedor</a>
            </li>
        </ul>
    </header>
    <main class="mt-4 ml-4">
        <form action="../Controller/Fornecedor.php" method="POST">
            <section class="columns-3">
                <article>
                    <label for="name">Digite o nome do Fornecedor: </label>
                    <input type="text" id="nome" name="name" class="border border-blue-400">
                </article>
                <article>
                    <label for="cod">Código do Fornecedor: </label>
                    <input type="number" id="code" name="price" class="border border-blue-400" min=1 max=100>
                </article>
                <article>
                    <label for="service">Serviço: </label>
                    <input type="text" id="service" name="service name" class="border border-blue-400" min=15 max=150>
                </article>
            </section>
            <article class="flex justify-center mt-4">
                <button type="submit" class="rounded p-4 bg-blue-700 text-white">Cadastrar</button>
            </article>
        </form>
    </main>
</body>
</html>