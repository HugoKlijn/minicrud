<?php 
 
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":username", $_POST['username']);
$stmt->bindParam(":password", $_POST['password']);
$stmt->execute();
$result = $stmt->fetchAll();
var_dump($result);
if(count($result) > 0){
    $_SESSION["username"] = $_POST['username'];
    header("location: admin.php");
} else {
    echo "username niet gevonden";
}
//var_dump($_POST);
 
 ;
 
?>

<main>
    <form action="login.php" method="post">
        gebruikersnaam <input type="text" name="username" value="" /><br />
        wachtwoord <input type="text" name="password" value=""><br />
        <input type="submit" value="login" />

    </form>
</main>