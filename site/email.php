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
                <h1>Ne pare rau!</h1>
                <h2>Mesajul nu a putut fi trimis!</h2>
            <?php } else { ?>
                <h1>Felicitări!</h1>
                <h2>Mesajul a fost trimis!</h2>
            <?php } ?>
            <br>
            <div class="button-center">
                <a href="contact_ro.html"><button type="button" class="back-button">&#171; Înapoi</button></a>
            </div>
        </div>
    </body>
</html>
