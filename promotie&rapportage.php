<?php

include_once("data.inc.php");




    





?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotie & rapportage</title>
    <link rel="icon" href="link">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet"> 
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
        <span class="anchor" id="<?php echo $key ?>"></span>
            <img  src="<?php echo $p["image"] ?>" alt="foto">
            <h5><?php echo strtoupper($p["title"])  ?></h5>
            <p><?php echo $p["info"] ?></p>
            <div id="prijzen_offerte">
                <a href="prijzen.php">PRIJZEN</a>
                <a href="offerte.php?dienst=<?php echo $p["title"] ?>">OFFERTE</a>
            </div>
        </div>
        <?php endforeach; ?>

        
        



    </div>

    <?php include_once("footer.inc.php"); ?>





    
</body>
</html>