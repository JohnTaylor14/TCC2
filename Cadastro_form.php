<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "projetoFilmoteca");

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $datadenascimento = $_POST["datadenascimento"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); 

    $sql = "INSERT INTO users (name, email, telefone, datadenascimento, username, password) VALUES ('$name', '$email', '$telefone', '$datadenascimento', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        session_start();
        $_SESSION["username"] = $username;
        header("Location: home.php");
        exit();
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }

    $conn->close();
}
?>
