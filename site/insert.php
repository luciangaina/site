<?php
    $nume = $_POST['nume'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $data = $_POST['data'];
    $ora = $_POST['ora'];
    $locatie = $_POST['locatie'];
    $perechi = $_POST['perechi'];
    $obs = $_POST['obs'];

    include_once('db_properties.php');

    $con=mysqli_connect($db_server,$db_name,$db_pass);

    if(!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    mysqli_select_db($con, $db_name) or die(mysqli_connect_error());

    $q= "INSERT INTO dt_booking (b_nume,b_telefon,b_email,b_data,b_ora,b_locatie,b_perechi,b_obs) VALUES ('$nume','$telefon','$email','$data','$ora','$locatie','$perechi','$obs')";

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
            <?php  if(!mysqli_query($con,$q))
            { ?>
                <h1>Ne pare rau!</h1>
                <h2>Rezervarea nu a fost înregistrată!<h2>
            <?php } else { ?>
                <h1>Felicitări!</h1>
                <h2>Rezervarea a fost înregistrată cu succes!</h2>
            <?php } ?>
            <br>
            <div class="button-center">
                <a href="home_ro.php"><button type="button" class="back-button">&#171; Înapoi</button></a>
            </div>
        </div>
    </body>
</html>