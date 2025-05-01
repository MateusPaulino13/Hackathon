<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name       = $_POST['name'] ?? '';
    $email       = $_POST['email'] ?? '';
    $password   = $_POST['password'] ?? '';
    $age        = $_POST['age'] ?? '';
    $weight     = $_POST['weight'] ?? '';
    $height     = $_POST['height'] ?? '';
    $createDate = date("Y-m-d H:i:s");


    $stmt = $con->prepare("SELECT id FROM your_table WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>alert('Email already registered!')</script>";
    } else {

        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $targetDir = "image/";
            $imgName = basename($_FILES['image']['name']);
            $imgPath = $targetDir . $imgName;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $imgPath)) {
                $img = $imgPath;
            }
        }

        $hashedPassword = md5($password);

        $insert = $con->prepare("
        INSERT INTO your_table (email, password, image, name, age, create_date, weight, height)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
        ");
        $insert->bind_param("ssssisdd", $email, $hashedPassword, $img, $name, $age, $createDate, $weight, $height);
        $insert->execute();

        echo "<script>alert('Registration successful!');</script>";
        header("Location: login.php");
        exit;
    }

    $stmt->close();
}

$con->close();
