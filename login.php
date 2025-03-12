<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="assets/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Meu IF - Login</title>
</head>
<body>
    <form method="POST" action="">
        <label for="email">Email institucional</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" required>
        <p>Não tem cadastro? <a href="cadastro.php">Criar conta</a></p>
        <input type="submit" value="Realizar Login" id="submit">
    </form>
</body>
</html>
