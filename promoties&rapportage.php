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

    <div id="container_diensten">
        <div id="container_titels">
            <h3>DIENSTEN</h3>
            <h4>PROMOTIE EN RAPPORTAGE</h4>
        </div>
        
        <?php foreach($promoties as $key => $p): ?>
        <div id="uitleg_dienst">
            <span class="anchor" id="<?php echo $key ?>"></span>
            
            <?php if($p["video"] != null): ?>

                <video id="media_<?php echo $p["title"] ?>" autoplay loop src="<?php echo $p["video"] ?>">
                <!-- <source src="<?php echo $p["video"] ?>" type="video/mp4"> -->
                Your browser does not support the video tag.
                </video>
                
                <?php if($p["meer"] != null): ?>
                <a class="prev" id="prev_<?php echo $p["title"] ?>">&#10094;</a>
                <a class="next" id="next_<?php echo $p["title"] ?>" >&#10095;</a>
                <?php endif; ?>

            <?php else:?>

                <img id="media"  src="<?php echo $p["image"] ?>" alt="foto">
                
                <?php if($p["meer"] != null): ?>
                <a class="prev" id="prev_<?php echo $p["title"] ?>">&#10094;</a>
                <a class="next" id="next_<?php echo $p["title"] ?>" >&#10095;</a>
                <?php endif; ?>

            <?php endif ?>
           
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