<?php
$sql = "SELECT * FROM producten";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>



<?php foreach($result as $res){ ?>

<div class="card" style="width: 18rem;">
    <img src="img/<?php echo $res['img'];?>" alt="" />
    <div class="card-body">
        <h5 class="card-title"><?php echo $res['naam'];?></h5>
        <p class="card-text">
            €<?php echo $res['prijs'];?>
            <br>
            <?php echo $res['voorraad'];?>
        </p>
        <a href="#" class="btn btn-primary">bestellen</a>
    </div>
</div>
<?php } ?>