<?php

    include_once('db_properties.php');

    $con=mysqli_connect($db_server,$db_name,$db_pass);

    if(!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    mysqli_select_db($con, $db_name) or die(mysqli_connect_error());

    $userid=$_GET['userid'];

    if($userid !='')
    {
        $qD= sprintf("DELETE FROM dt_booking WHERE b_id=%s",$userid);
        mysqli_query($con,$qD) or die(mysqli_error($con));
    }
?>

<html>
    <head>
        <meta http-equiv="refresh" content="0; url='admin.php'" />
    </head>
</html>