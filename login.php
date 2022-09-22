<?php

session_start();
if (isset($_SESSION["autenticado"]) && $_SESSION["autenticado"] == true) {
    header("location: index.php");
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login QTS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div>
            <p class="title">Login</p>
            <p class="subtitle">Entre com sua senha e e-mail</p>
        </div>

        <form method="POST" action="./api/login.php">
            <input type="text" name="matricula"/>
            <input type="password" name="senha"/>
            <button>Login</button>
        </form>
    </div>
</body>

</html>