<?php
require_once 'includes/connect.php';

$stmt = $conn->prepare("INSERT INTO admin (username, password) VALUES (:username, :password)");
$stmt->execute(array(':username' => $_POST['username'], ':password' => $_POST['password']));

header('Location: login.php');
?>