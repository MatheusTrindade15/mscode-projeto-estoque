<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MS Code - Projeto 2024</title>
    <link rel="icon" type="image/x-icon" href="https://mediacdn.simonetti.com.br/media/favicon/websites/1/favicon-1_1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/assets/css/styles.css" rel="stylesheet">
    <link href="/assets/css/login.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto">
        <form action="/cadastrar/salvar" method="POST">
            <div class="d-flex align-items-center mb-4">
                <img class="p-0" src="/assets/images/logotipo.svg" width="72" height="57">

                <h1 class="h3 fw-normal my-0 ms-2">MS Code - Estoque</h1>
            </div>
                <?php if ($data['error'] === true) { 
                    echo "<div class='alert alert-danger' role='alert'>Email já cadastrado!</div>";
                } else if ($data['error'] === false) {
                    echo "<div class='alert alert-success' role='alert'>Cadastrado Com Sucesso!</div>";
                } else {
                    echo "";
                } ?>
            </div>

            <div class="form-floating my-1">
                <input type="text" name="nome" class="form-control" id="nome" placeholder="name">
                <label for="nome">Nome</label>
            </div>
            <div class="form-floating my-1">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email</label>
            </div>
            <div class="form-floating my-1">
                <input type="password" name="password" class="form-control" id="senha" placeholder="Password">
                <label for="senha">Senha</label>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Cadastrar</button>
            <div class="d-flex justify-content-between ">
                <p class="mt-5 mb-3 text-body-secondary">&copy; 2017-2024</p>
                <a href="/login" class="link-secondary">Já possuo um cadastro.</a>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>