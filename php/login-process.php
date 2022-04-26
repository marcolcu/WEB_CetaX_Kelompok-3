<?php
session_start();

$username = $_POST['user'];
$password = $_POST['pw'];

$k = new PDO();

$sql = "SELECT * FORM users
        WHERE username = ?";

$result = $k->prepare($sql);
$result->execute([$username]);

if($row = $result->fetch()) {
    if(password_verify($password, $row['password'])) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['user_id'] = $row['id'];
        // Jangan lupa ganti
        header('Location: home.php');
    } else {
        header('Location: login.php');
    }
} else {
    header('Location: login.php');
}