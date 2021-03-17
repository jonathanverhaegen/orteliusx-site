<?php

include_once("data.inc.php");



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijzen</title>
    <link rel="icon" href="link">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php include_once("header.inc.php"); ?>

    <div></div>

    <div id="container_prijzen">
        <div id="container_titels">
            <h4>Prijzen</h4>
        </div>

        <div id="container_uitleg">

        <?php foreach($prijzen as $p): ?>
        
        
        <div id="uitleg_prijzen">
            <h5><?php echo $p["titel"] ?></h5>
            <p><?php echo $p["prijs"] ?></p>
            <a class="btn_mobile" href="">MEER INFO</a>
            <a class="btn_desk" href="">OFFERTE</a>
        </div>
        
        <?php endforeach; ?>
        </div>

        <p class="extra_uitleg_prijzen">Deze prijzen zijn bedoeld om een ​​idee te geven van de kosten voor dit soort dienstverlening, ze kunnen variëren naargelang uw specifieke verzoeken en de administratieve procedures bij de verschillende autoriteiten.</p>
        



    </div>

    <?php include_once("footer.inc.php"); ?>





    
</body>
</html>