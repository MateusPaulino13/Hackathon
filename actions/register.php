<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name       = $_POST['name'] ?? '';
    $email       = $_POST['email'] ?? '';
    $password   = $_POST['password'] ?? '';
    // $age        = $_POST['age'] ?? '';
    $weight     = $_POST['weight'] ?? '';
    $height     = $_POST['height'] ?? '';
    $createDate = date("Y-m-d");


    $stmt = $con->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>alert('Email already registered!')</script>";
    } else {

        // if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        //     $targetDir = "image/";
        //     $imgName = basename($_FILES['image']['name']);
        //     $imgPath = $targetDir . $imgName;

        //     if (move_uploaded_file($_FILES['image']['tmp_name'], $imgPath)) {
        //         $img = $imgPath;
        //     }
        // }
        $hashedPassword = md5($password);

        $insert = $con->prepare("INSERT INTO users (name, email, password_hash, created_at, height, weight) VALUES (?, ?, ?, ?, ?, ?)");
        $insert->bind_param("ssssdd", $name, $email, $hashedPassword, $createDate, $height, $weight);
        $insert->execute();

        echo "<script>alert('Registration successful!');</script>";
        header("Location: ../pages/login.php");
        exit;
    }

    $stmt->close();
}

$con->close();
