<?php

    include_once('db_properties.php');

    $con=mysqli_connect($db_server,$db_name,$db_pass);

    if(!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    mysqli_select_db($con, $db_name) or die(mysqli_connect_error());

    $users = array();

    $q= sprintf("SELECT * FROM dt_booking");
    $res= mysqli_query($con,$q) or die(mysqli_error($con));

    if(mysqli_num_rows($res)>0)
    {
        while($row= mysqli_fetch_assoc($res))
        {
            $users[]= $row;
        }
    }
?>

<html>
    <head>
            <meta http-equiv="content-type" content="text/html;charset=utf-8" />
	
            <title>Doina Timișului - Admin</title>
            <link rel="Icon" type="image/png" href="img/dt.png" />
        
            <link href="css/bootstrap.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="css/font-awesome.min.css" />
            <link rel="stylesheet" href="css/animate.css" />
            <link href="css/animate.min.css" rel="stylesheet" /> 
            <link href="css/style.css" rel="stylesheet" />
            <link rel="stylesheet" href="css/bootstrap.css" />

    </head>
    <body class="body-index">
        <div class="sign-out">
            <a href="home_ro.html"><button type="button" class="back-button">Sign out</button></a>
        </div>
        <div class="center-admin">
            <h1>Bun venit, admin!</h1>
            <h2>Rezervări:</h2>
            <?php
                if(count($users)>0)
                {?>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nume</th>
                                <th>Telefon</th>
                                <th>Email</th>
                                <th>Data</th>
                                <th>Ora</th>
                                <th>Locatie</th>
                                <th>Nr. perechi</th>
                                <th>Observatii</th>
                                <th>Ops</th>
                            </tr>
                        </thead> 
                        <tbody>   
                            <?php
                                foreach($users as $k => $v)
                                {
                                    print sprintf('<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td>
                                    <td>%s</td><td>%s</td><td>%s</td><td><a href="" onclick="deleteuser(%s); return false;">
                                    <i class="glyphicon glyphicon-trash" style="color:red"></i></a></td></tr>',
                                    $v['b_id'], $v['b_nume'], $v['b_telefon'], $v['b_email'], $v['b_data'], $v['b_ora'],
                                    $v['b_locatie'], $v['b_perechi'], $v['b_obs'], $v['b_id']);
                                }
                            ?>
                        </tbody>
                    </table>
                <?php
                } else
                {?>
                    <h1>Nu sunt rezervări în sistem</h1>
                <?php
                }
                ?>
                <br><br>
                <a href="adaugare.html"><button class="back-button">Adauga rezervare</button></a>
        </div>

        <script src="js/jquery.js"></script>		
        <script src="js/bootstrap.min.js"></script>	
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.dataTables.js"></script>
        <script src="js/dataTables.bootstrap.js"></script>
        <script>
            $(".table").DataTable();
        </script>
        <script type="text/javascript">
            function deleteuser(id) {
                if(!confirm("Doriți să ștergeți înregistrarea?")) {
                    return;
                }

                document.location='delete.php?userid=' + id;
            }
        </script>
    </body>
</html>