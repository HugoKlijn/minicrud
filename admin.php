<?php
include_once "includes/connect.php";

if(isset($_SESSION['username'])){
} else {
    header("location: login.php");
}
 
$sql = "SELECT * FROM producten";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css" />
    <title>Sushi</title>
</head>

<body>

    <?php include "includes/header.php";?>

    <main>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">naam</th>
                    <th scope="col">prijs</th>
                    <th scope="col">voorraad</th>
                    <th scope="col">img</th>
                    <th scope="col">delete</th>
                    <th scope="col">edit</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach($result as $res){
            ?>
                <tr>
                    <td> <?php echo $res['id'];?></td>
                    <td> <?php echo $res['naam'];?></td>
                    <td> <?php echo $res['prijs'];?></td>
                    <td> <?php echo $res['voorraad'];?></td>
                    <td> <?php echo $res['img'];?></td>
                    <td>
                        <form action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $res['id'];?>">
                            <input type="submit" value="delete">
                        </form>
                    </td>
                    <td>
                        <form action="update.php" method="get">
                            <input type="hidden" name="id" value="<?php echo $res['id'];?>">
                            <input type="submit" value="edit">
                        </form>
                    </td>
                <tr>
                    <?php   }?>

            </tbody>
        </table>

        <div class='container mb-8'>
            <div class='row'>
                <div class='col-8'>
                    <form method='post' action='insertFood.php'>

                        <label for="exampleInputEmail1" class="form-label">Product naam</label>
                        <input type="text" class="form-control" id="naam" aria-describedby="emailHelp" name='naam'>


                        <label for="exampleInputEmail1" class="form-label">Prijs</label>
                        <input type="text" class="form-control" id="naam" aria-describedby="emailHelp" name='prijs'>


                        <label for="exampleInputEmail1" class="form-label">Voorraad</label>
                        <input type="text" class="form-control" id="naam" aria-describedby="emailHelp" name='voorraad'>


                        <label for="exampleInputEmail1" class="form-label">Afbeelding</label>
                        <input type="file" class="form-control" id="naam" aria-describedby="emailHelp" name='img'>

                        <button type="submit" class="btn btn-primary">Voeg toe</button>
                    </form>
                </div>
            </div>
        </div>
    </main>


    <?php include "includes/footer.php";?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>