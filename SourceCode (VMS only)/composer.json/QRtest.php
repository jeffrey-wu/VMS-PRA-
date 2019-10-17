<?php

    //ESTABLISHING CONNECTION
//     require "vendor/autoload.php";
    require "../dbConnect/dbConnect.php";
   
    $fn = $_POST['firstname'];
    $sn = $_POST['surname'];
    $connum = $_POST['contactno'];
    $entrydate = date('Y-m-d H:i:s');
    $exitdate = null;

// header("Content-Type: image/png");
require "vendor/autoload.php";
use Endroid\QrCode\QrCode;
// $qrCode = new QrCode($fn."--".$sn."--".$connum."--".$entrydate);
$cqr = $fn.$sn.$connum.$entrydate;
//ENCRYPTING DATA
$qr1=crypt($cqr, '$6$rounds=1000$YourSaltyStringz$');
$qr2=crypt($qr1, '$6$rounds=1000$YourSaltyStringz$');
$qr3=crypt($qr2, '$6$rounds=1000$YourSaltyStringz$');
$qr4=crypt($qr3, '$6$rounds=1000$YourSaltyStringz$');
$qr5=crypt($qr4, '$6$rounds=1000$YourSaltyStringz$');
$qr6=crypt($qr5, '$6$rounds=1000$YourSaltyStringz$');
$qr7=crypt($qr6, '$6$rounds=1000$YourSaltyStringz$');
$qr8=crypt($qr7, '$6$rounds=1000$YourSaltyStringz$');
$qr=serialize($qr8);
$qrCode = new QrCode($qr);
// header('Content-Type: '.$qrCode->getContentType());
// echo $qrCode->writeString();

//SAVE INTO DATABASE
//INSERT USER INTO DATABASE
$INSERT = "INSERT INTO visitor(vFirstName, vSurname, vContactNo, QR, entrydate, exitdate) VALUES('$fn', '$sn', '$connum', '$qr', '$entrydate','$exitdate')"; 
//UPDATE USER WHEN SIGNING OUT
// $UPDATE = "UPDATE visitor SET exitdate = '$exitdate' WHERE vFirstName='Jeffrey' AND vSurname='Wu' AND vContactNo='1234567890'";
mysqli_query($conn,$INSERT);
header('Location: ../home/home.html');


// echo gettype($qrCode);
// echo 'encrypted qr: ' . crypt($cqr, '$6$rounds=1000$YourSaltyStringz$');


// header('Content-Type: '.$qrCode->getContentType());
// echo $qrCode->writeString();

?>