<?php

include_once("data.inc.php");


    





?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspectie</title>
    <link rel="icon" href="link">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php include_once("header.inc.php"); ?>

    <div id="container_diensten">
        <div id="container_titels">
            <h3>DIENSTEN</h3>
            <h4>Inspectie</h4>
        </div>
        
        <?php foreach($inspecties as $key => $i): ?>
        <div id="uitleg_dienst">
            <img id="<?php echo $key ?>" src="<?php echo $i["image"] ?>" alt="foto">
            <h5><?php echo strtoupper($i["title"])  ?></h5>
            <p><?php echo $i["info"] ?></p>
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