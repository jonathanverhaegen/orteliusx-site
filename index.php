<?php

include_once("data.inc.php");


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrteliusX</title>
    <link rel="icon" href="link">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php include_once("header.inc.php"); ?>


<h1>PROFESSIONAL DRONE SULOTIONS</h1>


<div id="container">

    <div id=intro>
        <p>Captatie van dronebeelden bezorgt uw project een verscheidenheid aan voordelen! Het is een uitstekende manier om sensatie en meeslependheid over te brengen en al zeker als u beroep doet op onze FPV-technieken.<br><br>

            Heeft uw project nood aan overzicht, inspectie of monitoring? Vanuit de lucht bieden wij u een 360°-view van het te observeren goed. Ook karteren van uw project biedt organisatorische mogelijkheden in het ontwikkelen van uw algemeen ruimtebeheer.<br><br>
            
            Gelicenseerde piloten gaan met u in samenwerking zodat een uitstekend resultaat kan bekomen worden. </p>
    </div>


    <div id="diensten_mob" >
        <h2>DIENSTEN</h2>
        <ul class="lijst_diensten">
            <li><a href="promotie&raportage.php#foto- en actie videografie">FOTO - EN ACTIE VIDEOGRAFIE</a></li>
            <li><a href="observatie&onderzoek.php#gis cartografie">GIS CARTOGRAFIE</a></li>
            <li><a href="inspectie.php">INSPECTIE </a></li>
            <li><a href="observatie&onderzoek.php#orthografische foto's">ORTHOGRAFISCHE FOTO’S</a></li>
            <li><a href="">3D MODELLEN</a></li>
            <li><a href="observatie&onderzoek.php#landbouw monitoring">LANDBOUW MONITORING</a></li>
            <li><a href="observatie&onderzoek.php#schadeclaim opmetingen">SCHADE OPMETING</a></li>
            <li><a href="observatie&onderzoek.php#volume berekening">VOLUME BEREKENING</a></li>
        </ul>
    </div>


    

    <div id="diensten_desk">

    <?php foreach($promoties as $key => $p) :?>
        <div class="dienst_desk">
            <a href="promotie&raportage.php#<?php echo $key; ?>">
                <img src="<?php echo $p['image'] ?>" alt="diensten">
                <p><?php echo strtoupper($p['catagorie'])  ?></p>
                <h5><?php echo strtoupper($p['title'])  ?></h5>
            </a>
        </div>

        <?php endforeach; ?>

        <?php foreach($observaties as $key => $o) :?>
        <div class="dienst_desk">
            <a href="observatie&onderzoek.php#<?php echo $key ?>">
                <img src="<?php echo $o['image'] ?>" alt="diensten">
                <p><?php echo strtoupper($o['catagorie']) ?></p>
                <h5><?php echo strtoupper($o['title'])  ?></h5>
            </a>
        </div>

        <?php endforeach; ?>

        <?php foreach($inspecties as $key => $i) :?>
        <div class="dienst_desk">
            <a href="inspectie.php#<?php echo $key?>">
                <img src="<?php echo $i['image'] ?>" alt="diensten">
                <p><?php echo strtoupper($i['catagorie'] ) ?></p>
                <h5><?php echo strtoupper($i['title'])  ?></h5>
            </a>
        </div>

        <?php endforeach; ?>

    </div>
    
    
    

    <?php include_once("footer.inc.php"); ?>

    
</body>
</html>