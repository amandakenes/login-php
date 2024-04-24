<?php
include('connection.php');

if (isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['nome']) == 0) {
        echo "Preencha seu nome";
    } else if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $nome = $mysqli->real_escape_string($_POST['nome']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_check_email = "SELECT * FROM usuarios WHERE email = '$email'";
        $result_check_email = $mysqli->query($sql_check_email);

        if ($result_check_email->num_rows > 0) {
            echo '<div class="text-danger mt-3">Este e-mail já está cadastrado</div>';
        } else {
            $sql_code = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
            $sql_query = $mysqli->query($sql_code) or die("Erro ao registrar usuário: " . $mysqli->error);
            
            header("Location: index.php");
            exit();
        };
    };
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
    <title>Registrar</title>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-4">Registrar</h1>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Registrar</button>
                </form>
                <p class="mt-3">Já tem uma conta? <a href="index.php">Entre aqui</a></p>
            </div>
        </div>
    </div>
</body>
</html>