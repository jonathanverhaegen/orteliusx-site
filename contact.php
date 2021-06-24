<?php

include_once("data.inc.php");



if(!empty($_POST)){

    $name = $_POST["name"];
    $mailFrom = $_POST["email"];
    $phone= $_POST["phone"];
    $subject = $_POST["onderwerp"];
    $message = $_POST["message"];
    
    $mailTo = "info@orteliusx.be";

    $headers = "From: ".$mailFrom;
    

    $text = "You have recieved a mail from ".$name.".\n\n".$phone."\n\n".$message;

    mail($mailTo, $subject, $text, $headers);



}



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
                <h4>CONTACT</h4>
            </div>

            <div class="grid">

            <div class="grid_text">

                <p>Wil u meer informatie of heeft u vragen over onze diensten? Aarzel dan niet om contact op te nemen.</p>
            
                <div class="info">
                    <p>TEL: 0478 52 77 96</p>
                    <p>E-MAIL: info@orteliusx.be</p>

                </div>

                <div class="adress">
                    <p>Driesstraat 87 </p>
                    <p>3461 Bekkevoort</p>
                    <p>BTW BE0755.913.872</p>
                </div>

                </div>



                <div class="contact">
                    <h5>ONLINE CONTACT FORMULIER</h5>

                    <?php if(!empty($_POST)): ?>

                    <p class="bedankt" >Bedankt voor ons te contacteren. We bekijken en beantwoorden zo snel mogelijk uw offerte</p>
                    <div class="bedankt_div" ></div>

                    <?php endif; ?>


                    <?php if(empty($_POST)): ?>

                    <form action="" method="post">

                    

                    <label for="name">Naam</label>
                    <input type="text" id="name" name="name" >

                    <label for="email">E-mailadres</label>
                    <input type="text" id="email" name="email" >

                    <label for="phone">Telefoonnummer</label>
                    <input type="text" id="phone" name="phone" >

                    <label for="onderwerp">Onderwerp</label>
                    <input type="text" id="onderwerp" name="onderwerp">

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