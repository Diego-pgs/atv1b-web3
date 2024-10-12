<?php

    require 'Banco.php';

    $Banco = new Banco();
    $conexao = $Banco->getConexao();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/styleCadastro.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> LOCAFILMS </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Séries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Filmes</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Conta</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center">Cadastro de Cliente</h2>
        <form action="cadastroCliente.php" method="POST">
            <div class="mt-5 mb-3 row justify-content-center">
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome *</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email *</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <div class="col-md-3">
                    <label for="cpf" class="form-label">CPF *</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" required>
                </div>
                <div class="col-md-3">
                    <label for="telefone" class="form-label">Telefone *</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" required>
                </div>
            </div>
            <div class="text-center mt-5">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>

    <footer class="text-white pt-4">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-12 mb-3">
                    <div class="redes-sociais d-flex justify-content-center">
                        <a href="https://facebook.com" class="me-3"><i class="bi bi-facebook icon"></i></a>
                        <a href="https://whatsapp.com" class="me-3"><i class="bi bi-whatsapp icon"></i></a>
                        <a href="https://instagram.com/" class="me-3"><i class="bi bi-instagram icon"></i></a>
                        <a href="https://youtube.com" class="me-3"><i class="bi bi-youtube icon"></i></a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex justify-content-center flex-wrap">
                        <a href="#" class="me-3">Sobre Nós</a>
                        <a href="#" class="me-3">Contate-nos</a>
                        <a href="#" class="me-3">Nossos Serviços</a>
                        <a href="#" class="me-3">Política de Privacidade</a>
                        <a href="#" class="me-3">Termos & Condições</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center p-3">
            <small>© 2024 Filmes Company. Todos os direitos reservados.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
