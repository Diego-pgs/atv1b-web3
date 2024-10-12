<?php
    require 'Banco.php';
    require 'Cliente.php';

    $Banco = new Banco();
    $conexao = $Banco->getConexao();

    $cliente = new Cliente($conexao);
    $stmt = $cliente->read($conexao);
    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styleListarClientes.css">
    <title> Lista de Clientes </title>
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
        <h2 class="text-center"> Lista de Clientes </h2>
        <div class="table-responsive">
            <table class="mt-4 table" border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>CPF</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientes as $cliente) { ?>
                        <tr>
                            <th scope="row">
                                <?php echo $cliente['id']; ?>
                            </th>
                            <td>
                                <?php echo $cliente['nome']; ?>
                            </td>
                            <td>
                                <?php echo $cliente['telefone']; ?>
                            </td>
                            <td>
                                <?php echo $cliente['email']; ?>
                            </td>
                            <td>
                                <?php echo $cliente['cpf']; ?>
                            </td>
                            <td>
                                <a href="form_atualizaCliente.php?id=<?php echo $cliente['id']; ?>" class="btn btn-outline-primary">
                                    <i class="bi bi-pencil-square"></i> Editar </a>

                                <a href="deletaCliente.php?id=<?php echo $cliente['id']; ?>" class="btn btn-outline-danger">
                                    <i class="bi bi-x-square"></i> Deletar </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="text-center mt-4">
            <a class="btn btn-primary" href="form_cadastroCliente.php">Cadastrar Novo Cliente</a>
        </div>
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
