<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="icon" href="assets/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Meu IF - Cadastro</title>
</head>
<body>
    <form method="POST" action="">
        <div class="container">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" required>
            </div>
        </div>
        <div class="container-submit">
            <label for="email">Email institucional</label>
            <input type="email" id="email" name="email" required>
            <p>Já tem cadastro? <a href="login.php">Entrar</a></p>
            <input type="submit" value="Realizar Cadastro" id="submit">
        </div>
    </form>
</body>
</html>
