<?php

include_once("data.inc.php");






    





?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Observatie & onderzoek</title>
    <link rel="icon" href="link">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php include_once("header.inc.php"); ?>

    <div id="container_diensten">
        <div id="container_titels">
            <h3>DIENSTEN</h3>
            <h4>Observatie & onderzoek</h4>
        </div>
        
        <?php foreach($observaties as $key => $o): ?>
        <div id="uitleg_dienst">
        <span class="anchor" id="<?php echo $key ?>"></span>
            <img  src="<?php echo $o["image"] ?>" alt="foto">
            <h5><?php echo strtoupper($o["title"])  ?></h5>
            <p><?php echo $o["info"] ?></p>
            <div id="prijzen_offerte">
                <a href="prijzen.php">PRIJZEN</a>
                <a href="offerte.php?dienst=<?php echo $o["title"] ?>">OFFERTE</a>
            </div>
        </div>
        <?php endforeach; ?>
        



    </div>

    <?php include_once("footer.inc.php"); ?>





    
</body>
</html>