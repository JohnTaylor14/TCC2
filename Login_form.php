<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $conn = new mysqli("localhost", "root", "", "projetoFilmoteca");

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    $username = $_POST["username"];
    $password = $_POST["password"];

   
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            $_SESSION["username"] = $username;
            header("Location: Home.php");
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    
    $conn->close();
}
?>