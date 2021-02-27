<?php

$promoties = [
    "foto-actie" => [
        "image" => "images/1.JPG",
        "title" => "FOTO- EN ACTIE VIDEOGRAFIE",
        "info" => "Met de First-Person-View (FPV) vaardigheid van de piloot, brengen we u unieke actiebeelden dat een meeslepende dimensie toevoegt aan de productie."
    ],
    [
        "image" => "images/1.JPG",
        "title" => "LUCHTOPNAMES",
        "info" => "Breng de infrastructuur of troeven van uw eigendom onder de aandacht ter bevordering van interesse bij uw klanten of partners."
    ],
    [
        "image" => "images/1.JPG",
        "title" => "ONROEREND",
        "info" => "Het in beeld brengen van percelen in 2D of 3D bevorderd sensatie en inlevingsvermogen naar uw klant toe. Het biedt een creatieve werkmethode aan die in vastgoedkantoren meer-en-meer worden toegepast."
    ]

    ];


    





?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotie & rapportage</title>
    <link rel="icon" href="link">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php include_once("header.inc.php"); ?>

    <div id="container_diensten">
        <div id="container_titels">
            <h3>DIENSTEN</h3>
            <h4>PROMOTIE EN RAPPORTAGE</h4>
        </div>
        
        <?php foreach($promoties as $key => $p): ?>
        <div id="uitleg_dienst">
            <img id="foto-actie" src="<?php echo $p["image"] ?>" alt="foto">
            <h5><?php echo $p["title"] ?></h5>
            <p><?php echo $p["info"] ?></p>
            <div id="prijzen_offerte">
                <a href="">PRIJZEN</a>
                <a href="">OFFERTE</a>
            </div>
        </div>
        <?php endforeach; ?>
        



    </div>

    <?php include_once("footer.inc.php"); ?>





    
</body>
</html>