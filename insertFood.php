<?php
require_once 'includes/connect.php';

$stmt = $conn->prepare("INSERT INTO producten (naam, voorraad, prijs, img) VALUES (:naam, :voorraad, :prijs, :img)");
$stmt->execute(array(':naam' => $_POST['naam'], ':voorraad' => $_POST['voorraad'], ':prijs' => $_POST['prijs'], ':img' => $_POST['img']));

header('Location: admin.php');
?>