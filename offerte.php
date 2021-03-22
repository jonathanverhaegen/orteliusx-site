<?php

include_once("data.inc.php");

if(!empty($_GET["dienst"])){

    $diensten = $_GET["dienst"];

    var_dump($diensten);
    
}else{
    $diensten = array_merge($promoties, $observaties, $inspecties);
}



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offerte</title>
    <link rel="icon" href="link">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php include_once("header.inc.php"); ?>

    <div></div>

    <div id="background">

    <div id=container_contact>

            <div id="container_titels">
                <h4>OFFERTE</h4>
            </div>

            <div class="grid">

<div class="grid_text">

    <p>Wil u meer informatie of heeft u vragen over onze diensten? Aarzel dan niet om contact op te nemen.</p>

    <div class="info">
        <p>TEL: 0478527796</p>
        <p>E-MAIL: info@orteliusx.be</p>

    </div>

    <div class="adress">
        <p>Driesstraat 87 </p>
        <p>3461 Bekkevoort</p>
        <p>BTW BE0755.913.872</p>
    </div>

    </div>


                <div class="contact">
                    <h6>ONLINE CONTACT FORMULIER</h6>

                    <form action="" method="post">

                    <label for="name">Naam</label>
                    <input type="text" id="name" name="name" >

                    <label for="email">E-mailadress</label>
                    <input type="text" id="email" name="email" >

                    <label for="phone">Telefoonnummer</label>
                    <input type="text" id="phone" name="phone" >

                    <label for="onderwerp">Onderwerp</label>
                    <select id="onderwerp" name="onderwerp">

                    

                        <?php if(!empty($_GET["dienst"])):?>
                            <option value="<?php echo $diensten ?>"><?php echo $diensten ?></option>
                        <?php endif; ?>

                        <?php if(empty($_GET["dienst"])):?>
                            
                            <?php foreach($diensten as $d): ?>
                            <option value="<?php echo $d["title"] ?>"><?php echo $d["title"] ?></option>
                            <?php endforeach; ?>

                        <?php endif; ?>

                    </select>


                    <label for="message">Bericht</label>
                    <textarea type="text" id="message" name="message" style="height:200px;" ></textarea>

                    <div class="btn">
                        <input type="submit" value="VERSTUREN">
                    </div>



                    </form>


                </div>


        
        
        </div>

        
    
        </div>


    </div>

    <?php include_once("footer.inc.php"); ?>





    
</body>
</html>