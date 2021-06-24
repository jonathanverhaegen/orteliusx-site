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
                    <p><?php echo $p["prijs"] ?>
                    <?php if($p["prijs"] != "Variabel"): ?>
                    <span class="prijs--klein"> excl btw</span>
                    <?php endif; ?></p>
                    <a id="btn_mobile" class="<?php echo $key; ?>" href="prijzen.php?prijs=<?php echo $key; ?>">MEER INFO</a>
                    
                </div>

            <?php endforeach; ?>
    </div>

    






        <div id="container_uitleg_desk">

        <?php foreach($prijzen as $p): ?>
        
        
        <div id="uitleg_prijzen">
            <h5><?php echo $p["titel"] ?></h5>
            <p class="prijs"><?php echo $p["prijs"] ?>
            <?php if($p["prijs"] != "Variabel"): ?>
            <span class="prijs--klein"> excl btw</span>
            <?php endif; ?>
            </p>
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