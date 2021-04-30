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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet"> 
</head>
<body>

<?php include_once("header.inc.php"); ?>


<h1>PROFESSIONAL DRONE SOLUTIONS</h1>


<div id="container">

    <!-- <div id=intro>
        <p>Captatie van dronebeelden bezorgt uw project een verscheidenheid aan voordelen! Het is een uitstekende manier om sensatie en meeslependheid over te brengen en al zeker als u beroep doet op onze FPV-technieken.<br><br>

            Heeft uw project nood aan overzicht, inspectie of monitoring? Vanuit de lucht bieden wij u een 360°-view van het te observeren goed. Ook karteren van uw project biedt organisatorische mogelijkheden in het ontwikkelen van uw algemeen ruimtebeheer.<br><br>
            
            Gelicenseerde piloten gaan met u in samenwerking zodat een uitstekend resultaat kan bekomen worden. </p>
    </div> -->


    <div id="diensten_mob" >
        <h2>DIENSTEN</h2>
        <ul class="lijst_diensten">

        <?php foreach($diensten as $key => $d): ?>
            <li><a href="<?php echo $d["link"] ?>.php#<?php echo $key; ?>"><?php echo strtoupper($d['title'])  ?></a></li>
        <?php endforeach; ?> 
            
        </ul>
    </div>


    

    <div id="diensten_desk">

    <?php foreach($diensten as $key => $d) :?>
        <div class="dienst_desk">
            <a href="<?php echo $d["link"] ?>.php#<?php echo $key; ?>">
                <img src="<?php echo $d['image'] ?>" alt="diensten">
                <p><?php echo strtoupper($d['catagorie'])  ?></p>
                <h5><?php echo strtoupper($d['title'])  ?></h5>
            </a>
        </div>

        <?php endforeach; ?>



    </div>
    
    
    

    <?php include_once("footer.inc.php"); ?>

    
</body>
</html>