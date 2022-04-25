<?php
require_once 'includes/connect.php';

$stmt = $conn->prepare("SELECT * FROM producten where id = :id");
$stmt ->execute(['id' => $_GET['id']]);
$data = $stmt->fetch();

if(isset($_POST['submit'])){
    $sql = "UPDATE producten SET 
        naam = :naam,
        voorraad = :voorraad, 
        prijs = :prijs, 
        img = :img 
        WHERE id = :id";

    $statement = $conn->prepare($sql);
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':naam', $_POST['naam']);
    $stmt->bindParam(':voorraad', $_POST['voorraad']);
    $stmt->bindParam(':prijs', $_POST['prijs']);
    $stmt->bindParam(':img', $_POST['img']);
    $stmt->bindParam(':id', $_GET['id']);
    if($stmt->execute()){
        header('Location: admin.php');
    }

    $stmt->execute();
    header("location: admin.php");
}
?>





<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<?php include 'includes/header.php'; ?>


<div class='container mb-8'>
    <div class='row'>
        <div class='col-8'>
            <form method='post'>

                <label for="exampleInputEmail1" class="form-label">Product naam</label>
                <input type="text" class="form-control" id="naam" aria-describedby="emailHelp" name='naam'
                    value="<?php echo $data['naam'];?>">


                <label for="exampleInputEmail1" class="form-label">Prijs</label>
                <input type="text" class="form-control" id="naam" aria-describedby="emailHelp" name='prijs'
                    value="<?php echo $data['prijs'];?>">


                <label for="exampleInputEmail1" class="form-label">Voorraad</label>
                <input type="text" class="form-control" id="naam" aria-describedby="emailHelp" name='voorraad'
                    value="<?php echo $data['voorraad'];?>">

                <label for="exampleInputEmail1" class="form-label">Afbeelding</label>
                <input type="file" class="form-control" id="naam" aria-describedby="emailHelp" name='img'
                    value="<?php echo $data['img'];?>">


                <button type="submit" class="btn btn-primary" name="submit">Voeg toe</button>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                    crossorigin="anonymous">
                </script>
            </form>

        </div>
    </div>
</div>