<?php
session_start();
include 'connection.php';

if (isset($_POST['sub'])) {
    $email = $_POST['femail'] ?? '';
    $password = $_POST['fpassword'] ?? '';


    $stmt = $con->prepare("SELECT id, passaword FROM users WHERE mail = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();


        if (password_verify($password, $user['password'])) {
            $_SESSION['id'] = $user['id'];
            header("Location: home.php");
            exit;
        } else {
            echo " Mail is not Correct";
        }
    } else {
        echo "Mail not Found";
    }

    $stmt->close();
}

$con->close();
