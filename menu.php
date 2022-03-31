<?php
include_once "includes/connect.php";


$sql = "SELECT * FROM producten";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
//var_dump($result);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/main.css" />
    <title>Sushi</title>
</head>

<body>
    <nav>
        <div class="logo">
            <h2>Suchi</h2>
        </div>
        <div class="navigatie">
            <a class="nav-link" href="#">Menu</a>
            <a class="nav-link" href="index.php">Work</a>
            <a class="nav-link" href="#">About</a>
            <a class="nav-link" href="#">Contact</a>
        </div>
    </nav>
    <main>
        <div class="achtergrond">
            <img src="img/sushi.jpg" />
        </div>
        <section>

            <?php foreach($result as $res){ ?>
            <div class="kaart">
                <img src="img/<?php echo $res['img'];?>" alt="" />
                <p><?php echo $res['prijs'];?></p>
                <p><?php echo $res['voorraad'];?></p>
            </div>
            <?php } ?>
            <!--
            <div class="kaart">
                <img src="img/zalmkrab.avif" alt="" />
            </div>
            <div class="kaart">
                <img src="img/zalmrolletje.avif" alt="" />
            </div>
          -->
        </section>

        <div></div>
    </main>
</body>

</html>