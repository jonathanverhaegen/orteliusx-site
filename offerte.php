<?php

include_once("data.inc.php");

if(!empty($_GET["dienst"])){

    $dienst = ucfirst($_GET["dienst"]);
    $diensten = array_merge($promoties, $observaties, $inspecties);

    
    
}else{
    // $diensten = array_merge($promoties, $observaties, $inspecties);
}


if(!empty($_POST)){

    $name = $_POST["name"];
    $mailFrom = $_POST["email"];
    $phone= $_POST["phone"];
    $company = $_POST["bedrijfsnaam"];
    $number = $_POST["ondernummer"];
    $street = $_POST["street"];
    $housenumber = $_POST["housenumber"];
    $city = $_POST["city"];
    $postalcode = $_POST["postalcode"];
    $subject = $_POST["onderwerp"];
    $message = $_POST["message"];
    $location = $_POST["location"];

    $mailTo = "offerte@orteliusx.be";
    $headers = "From: ".$mailFrom;

    $text = "You have recieved a mail from ".$name.".\n\n".$phone."\n\n".$company."\n".$number."\n\n".$street." ".$housenumber."\n".$postalcode."  ".$city."\n\n".$location."\n\n".$message;

    mail($mailTo, $subject, $text, $headers);
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

    <div></div>

    <div id="background">

    <div id=container_contact>

            <div id="container_titels">
                <h4>OFFERTE</h4>
            </div>

            <div class="grid">

    <div class="grid_text">

    <p>Vraag hier vrijblijvend uw offerte aan. <br>Wij antwoorden doorgaans binnen de 48 uur.</p>

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

                    <p class="bedankt" >Bedankt voor ons te contacteren. We bekijken en beantwoorden zo snel mogelijk uw bericht</p>
                    <div class="bedankt_div" ></div>

                    <?php endif; ?>

                    <?php if(empty($_POST)): ?>

                    <form action="" method="post">

                    <h6>Persoongegevens</h6>

                    <label for="name">Naam</label>
                    <input type="text" id="name" name="name" >

                    <label for="email">E-mailadres</label>
                    <input type="text" id="email" name="email" >

                    <label for="phone">Telefoonnummer</label>
                    <input type="text" id="phone" name="phone" >

                    <h6>Bedrijfsgegevens</h6>

                    <label for="bedrijfsnaam">Bedrijfsnaam</label>
                    <input type="text" id="bedrijfsnaam" name="bedrijfsnaam" >

                    <label for="ondernummer">Btw-nummer</label>
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
                            <option value="<?php echo $dienst ?>"><?php echo $dienst ?></option>
                            <?php foreach($diensten as $d): ?>
                            <option value="<?php echo ucfirst($d["title"]) ?>"><?php echo ucfirst($d["title"]) ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <?php if(empty($_GET["dienst"])):?>
                            
                            <?php foreach($diensten as $d): ?>
                            <option value="<?php echo ucfirst($d["title"]) ?>"><?php echo ucfirst($d["title"]) ?></option>
                            <?php endforeach; ?>

                        <?php endif; ?>

                    </select>

                    <label for="location">Locatie</label>
                    <p style="font-size: 14px;" class ="concept_info">Vul hier het adres in waar de opdracht doorgaat</p>
                    <input type="text" id="location" name="location" >


                    <label for="message">Concept van opdracht</label>
                    <p style="font-size: 14px;" class ="concept_info">Geef hier meer informatie over de opdracht</p>
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