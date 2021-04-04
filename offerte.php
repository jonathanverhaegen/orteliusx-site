<?php

include_once("data.inc.php");

if(!empty($_GET["dienst"])){

    $diensten = $_GET["dienst"];

    
    
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet"> 
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

    <p>Vraag hier vrijblijvend uw offerte aan.</p>

    <!-- <div class="info">
        <p>TEL: 0478527796</p>
        <p>E-MAIL: info@orteliusx.be</p>

    </div>

    <div class="adress">
        <p>Driesstraat 87 </p>
        <p>3461 Bekkevoort</p>
        <p>BTW BE0755.913.872</p>
    </div> -->

    </div>


                <div class="contact">
                    <h5>ONLINE OFFERTE AANVRAAG</h5>

                    <?php if(!empty($_POST)): ?>

                    <p class="bedankt" >Bedankt voor ons te contacteren. We bekijken en beantwoorden zo snel mogelijk je bericht</p>
                    <div class="bedankt_div" ></div>

                    <?php endif; ?>

                    <?php if(empty($_POST)): ?>

                    <form action="" method="post">

                    <h6>Persoongegevens</h6>

                    <label for="name">Naam</label>
                    <input type="text" id="name" name="name" >

                    <label for="email">E-mailadress</label>
                    <input type="text" id="email" name="email" >

                    <label for="phone">Telefoonnummer</label>
                    <input type="text" id="phone" name="phone" >

                    <h6>Bedrijfsgegevens</h6>

                    <label for="bedrijfsnaam">Bedrijfsnaam</label>
                    <input type="text" id="bedrijfsnaam" name="bedrijfsnaam" >

                    <label for="ondernummer">Ondernemingsnummer</label>
                    <input type="text" id="ondernummer" name="ondernummer" >

                    <label for="street">Straat</label>
                    <input type="text" id="street" name="street" >

                    <label for="housenumber">Huisnummer</label>
                    <input type="text" id="housenumber" name="housenumber" >

                    <label for="city">Stad</label>
                    <input type="text" id="city" name="city" >

                    <label for="postalcode">Postcode</label>
                    <input type="text" id="postalcode" name="postalcode" >

                    <h6>Offerte</h6>

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
                    <?php endif; ?>

                </div>


        
        
        </div>

        
    
        </div>


    </div>

    <?php include_once("footer.inc.php"); ?>





    
</body>
</html>