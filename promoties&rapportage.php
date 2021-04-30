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