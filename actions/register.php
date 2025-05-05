<?php
include 'connection.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $password  = $_POST['password'] ?? '';
    $weight  = $_POST['weight'] ?? '';
    $height  = $_POST['height'] ?? '';
    $createDate = date("Y-m-d");

    $stmt = $con->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // redireciona com erro
        header("Location: ../pages/register.php?error=email");
        exit;
    } else {
        $hashedPassword = md5($password);

        $insert = $con->prepare("INSERT INTO users (name, email, password_hash, created_at, height, weight) VALUES (?, ?, ?, ?, ?, ?)");
        $insert->bind_param("ssssdd", $name, $email, $hashedPassword, $createDate, $height, $weight);

        if ($insert->execute()) {
            header("Location: ../pages/login.php?success=1");
            exit;
        } else {
            die("Erro ao inserir: " . $insert->error);
        }
    }

    $stmt->close();
}

$con->close();

