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

if($send){
    print 'mail send';
} else{
    print 'error';
}
?>