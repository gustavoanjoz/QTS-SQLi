<?php

session_start();

if (!isset($_SESSION["autenticado"]) || !$_SESSION["autenticado"]) {
    header("location: ./login.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página segura</title>
    <link rel="stylesheet" href="style.css">
    <script>
        const handleButton = () => {
            window.location.href = './api/logout.php'
        }
    </script>
</head>

<body>
    <div class="container login">
        <p>
            Usuário autenticado com a matricula <?php echo $_SESSION["matricula"]; ?>
        </p>
        <button onclick="handleButton()">Deslogar</button>
    </div>
</body>

</html> 