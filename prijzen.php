<?php

include_once("data.inc.php");

if(!empty($_GET["prijs"])){
    $p = $_GET["prijs"];

    $prijs = $prijzen[$p];

    
}



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijzen</title>
    <link rel="icon" href="link">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet"> 
</head>
<body>

<?php include_once("header.inc.php"); ?>

<?php if(!empty($_GET["prijs"])): ?>

    <div class="modal">
<span class="close">&times;</span>

            <div id="modal_prijzen">
                
                <h5><?php echo $prijs["titel"] ?></h5>
                <p class="prijs"><?php echo $prijs["prijs"] ?></p>
                <p class="uitleg"><?php echo $prijs["uitleg"] ?></p>
                <ul class="infoPrijs">
                    <?php foreach($prijs["info"] as $i): ?>
                    <li><?php echo $i?></li>
                    <?php endforeach; ?>
                </ul>
                <a class="btn_desk" href="offerte.php">OFFERTE</a>
            </div>
        </div>

<?php endif; ?>

    <div id="container_prijzen">
        <div id="container_titels">
            <h4>PRIJZEN</h4>
        </div>

        <div id="container_uitleg_mob">

            <?php foreach($prijzen as $key =>$p): ?>


                <div id="uitleg_prijzen">
                    <h5><?php echo $p["titel"] ?></h5>
                    <p><?php echo $p["prijs"] ?></p>
                    <a id="btn_mobile" class="<?php echo $key; ?>" href="prijzen.php?prijs=<?php echo $key; ?>">MEER INFO</a>
                    
                </div>

            <?php endforeach; ?>
    </div>

    






        <div id="container_uitleg_desk">

        <?php foreach($prijzen as $p): ?>
        
        
        <div id="uitleg_prijzen">
            <h5><?php echo $p["titel"] ?></h5>
            <p class="prijs"><?php echo $p["prijs"] ?></p>
            <p class="uitleg"><?php echo $p["uitleg"] ?></p>
            <ul class="infoPrijs">
                <?php foreach($p["info"] as $i): ?>
                <li><?php echo $i?></li>
                <?php endforeach; ?>
            </ul>
            <a class="btn_desk" href="offerte.php">OFFERTE</a>
        </div>
        
        <?php endforeach; ?>
        </div>

        <p class="extra_uitleg_prijzen">Deze prijzen zijn bedoeld om een ​​idee te geven van de kosten voor dit soort dienstverlening, ze kunnen variëren naargelang uw specifieke verzoeken en de administratieve procedures bij de verschillende autoriteiten.</p>
        



    </div>

    <?php include_once("footer.inc.php"); ?>





    
</body>
</html>