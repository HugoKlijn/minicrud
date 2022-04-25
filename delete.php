<?php
require_once 'includes/connect.php';


$sql = "DELETE FROM producten WHERE id=:id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(":id", $_POST['id']);
  $stmt->execute();
  header("location: admin.php");

?>