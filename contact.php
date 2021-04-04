<?php

include_once("data.inc.php");



if(!empty($_POST)){
    
    $to = "jonathan_verhaegen@hotmail.com";

    $subject = `contact formulier van ${$_POST["name"]}`;
    
    $message = $_POST["message"];
    
    $headers = "From: Toon van OrteliusX <jonathan_verhaegen@hotmail.com>\r\n";
    $headers .= "Reply-To: jonathan_verhaegen@hotmail.com\r\n";
    $headers .= "Content-type: text\html\r\n";

    mail($to, $subject, $message, $headers);



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
</head>
<body>

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
                    <h5>ONLINE CONTACT FORMULIER</h5>

                    <?php if(!empty($_POST)): ?>

                    <p class="bedankt" >Bedankt voor ons te contacteren. We bekijken en beantwoorden zo snel mogelijk je bericht</p>
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