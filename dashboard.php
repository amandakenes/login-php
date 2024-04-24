<?php

include('protect.php');

if (!isset($_SESSION)) {
    session_start();
};

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/style.css">
    <title>Painel</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid justify-content-between">
                <a class="navbar-brand text-white" href="#">Escola</a>
                <div>
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Aulas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Atividades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Perfil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <h2 class="lead mt-4">Bem-vindo ao Painel, <?php echo $_SESSION['nome']; ?></h2>
        <a href="logout.php" class="btn btn-primary">Sair</a>
    </div>
</body>
</html>