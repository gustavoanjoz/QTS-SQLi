<?php
    error_reporting(E_ALL ^ E_WARNING);
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $conn = mysqli_connect("127.0.0.1", "root", "root", "sqliexample", 3306);

        $matricula = $_POST["matricula"];
        $senha = $_POST["senha"];

        if(empty($matricula)||empty($senha)){
            echo "Faltando informacoes";
        }
        
        if(!$conn){
            die(mysqli_connect_error());
        }

        $query = "SELECT matricula FROM alunos WHERE matricula = '$matricula' AND senha = '$senha'";

        $aluno = mysqli_query($conn, $query);

        mysqli_close($conn);

        if(mysqli_num_rows($aluno) > 0) {
            $_SESSION["autenticado"] = true;
            $_SESSION["matricula"] = $matricula;
            header("location: ../index.php");
        } else {
            echo "Matricula ou senha incorretos";
        }
    } else {
        echo "Metodo nao suportado";
    }


?>