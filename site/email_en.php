<?php
$name= $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$telefon= $_POST['telefon'];
$message= $_POST['message'];
$to= 'g.luci97@gmail.com';

$body = 'Nume: '.$name.'
Email :'.$email.'
Tel: '.$telefon.'

Mesaj: '
    .$message;

$headers = "From:".$name." <".$email.">\r\n";
$headers .= "Reply-to: ".$email."\r\n";

$send= mail($to,$subject,$body,$headers);
?>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        
        <title>Doina Timișului</title>
        <link rel="Icon" type="image/png" href="img/dt.png" />

	    <link href="css/style.css" rel="stylesheet" />
    </head>
    <body class="body-index">
        <div class="center-insert">
            <?php  if(!$send)
            { ?>
                <h1>Sorry!</h1>
                <h2>Message could not be sent!</h2>
            <?php } else { ?>
                <h1>Congratulations!</h1>
                <h2>The message was sent!</h2>
            <?php } ?>
            <br>
            <div class="button-center">
                <a href="contact_en.html"><button type="button" class="back-button">&#171; Back</button></a>
            </div>
        </div>
    </body>
</html>
