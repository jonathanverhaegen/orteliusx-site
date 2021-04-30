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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet"> 
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
            
            <?php if($o["video"] != null): ?>

                <video id="media_<?php echo $key ?>" autoplay loop src="<?php echo $o["video"] ?>">
                <!-- <source src="<?php echo $o["video"] ?>" type="video/mp4"> -->
                Your browser does not support the video tag.
                </video>
                
                <?php if($o["meer"] != null): ?>
                <a class="prev" id="prev_<?php echo $key ?>">&#10094;</a>
                <a class="next" id="next_<?php echo $key ?>" >&#10095;</a>
                <?php endif; ?>

            <?php else:?>

                <img id="media"  src="<?php echo $o["image"] ?>" alt="foto">
                
                <?php if($o["meer"] != null): ?>
                <a class="prev" id="prev_<?php echo $o["title"] ?>">&#10094;</a>
                <a class="next" id="next_<?php echo $o["title"] ?>" >&#10095;</a>
                <?php endif; ?>

            <?php endif ?>
           
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