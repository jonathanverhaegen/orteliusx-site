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
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5P60Y6E96H"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5P60Y6E96H');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MKDX9TP');</script>
<!-- End Google Tag Manager -->



</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MKDX9TP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


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


    

    
    <div class="diensten_desk">
    <h3 class="dienst__title">Promoties & Rapportage</h3>

    <?php foreach($dienstprom as $key => $d) :?>
        <div class="dienst_desk">
            <a href="<?php echo $d["link"] ?>.php#<?php echo $key; ?>">
                <img src="<?php echo $d['image'] ?>" alt="diensten">
                <!-- <p><?php echo strtoupper($d['catagorie'])  ?></p> -->
                <h5><?php echo strtoupper($d['title'])  ?></h5>
            </a>
        </div>

    <?php endforeach; ?>

    <span class="dienst__line"></span>

    </div>






    <div class="diensten_desk">
    <h3 class="dienst__title">Inspectie</h3>

    <?php foreach($dienstin as $key => $d) :?>
        <div class="dienst_desk">
            <a href="<?php echo $d["link"] ?>.php#<?php echo $key; ?>">
                <img src="<?php echo $d['image'] ?>" alt="diensten">
                <!-- <p><?php echo strtoupper($d['catagorie'])  ?></p> -->
                <h5><?php echo strtoupper($d['title'])  ?></h5>
            </a>
        </div>

    <?php endforeach; ?>
    <span class="dienst__line"></span>
    </div>



    <div class="diensten_desk">
    <h3 class="dienst__title">Observaties & onderzoek</h3>
    

    <?php foreach($dienstob as $key => $d) :?>
        <div class="dienst_desk">
            <a href="<?php echo $d["link"] ?>.php#<?php echo $key; ?>">
                <img src="<?php echo $d['image'] ?>" alt="diensten">
                <!-- <p><?php echo strtoupper($d['catagorie'])  ?></p> -->
                <h5><?php echo strtoupper($d['title'])  ?></h5>
            </a>
        </div>

    <?php endforeach; ?>

    <!-- <span class="dienst__line"></span> -->
        
    </div>
    





    
    
    
    

    <?php include_once("footer.inc.php"); ?>

    
</body>
</html>