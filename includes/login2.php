<?php 
 
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":username", $_POST['username']);
$stmt->bindParam(":password", $_POST['password']);
$stmt->execute();
$result = $stmt->fetchAll();
if(count($result) > 0){
    $_SESSION["username"] = $_POST['username'];
    header("location: index.php");
}
//var_dump($_POST);
?>

<main>
    <form class="form-signin" action="login.php" method="post" id="form">
        <h1 class="h3 mb-3 font-weight-normal">log in</h1>
        <input type="text" class="form-control" placeholder="gebruikersnaam" name="username" value="" id="name" /><br />
        <input type="password" class="form-control" placeholder="wachtwoord" name="password" value=""
            id="password" /><br />

        <input class="btn btn-lg btn-primary btn-block" type="submit" value="login" />
        <script defer src="main.js"></script>

    </form>
    <script defer src="main.js"></script>

</main>