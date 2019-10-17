<?php
    //ESTABLISHING CONNECTION
    require "../dbConnect/dbConnect.php";
    require "../composer.json/vendor/autoload.php";
    use Endroid\QrCode\QrCode;
   
    $fn = trim($_POST['firstname']);
    $sn = trim($_POST['surname']);
    $connum = trim($_POST['contactno']);
    $guest = false;
    $entrydate = date('Y-m-d H:i:s');
    $exitdate = null;

    if(empty($fn)){
        $errors['firstname'] = "Please enter your Name";
        echo htmlspecialchars($errors["firstname"]);
        
    }
    else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $fn)){
            $errors['firstname'] = "Name must be letters and spaces only";
            echo htmlspecialchars($errors["firstname"]);
        }
    }
    if(empty($sn)){
        $errors['surname'] = "Please enter your Surname";
        echo htmlspecialchars($errors["surname"]);
    }
    else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $sn)){
            $errors['surname'] = "Surname must be letters and spaces only";
            echo htmlspecialchars($errors["surname"]);
        }
    }
    if(empty($connum)){
        $errors['contactno'] = "Please enter your Contactno";
        echo htmlspecialchars($errors["contactno"]);
    }
    else{
        if(strlen($connum)<10 || strlen($connum)>10 || !preg_match("/^[0-9]{10}$/", $connum)){
            $errors['contactno'] = "Contactno must be a valid number";
            echo htmlspecialchars($errors["contactno"]);
        }
    }
      
    // require "../composer.json/vendor/autoload.php";
    // use Endroid\QrCode\QrCode;
    // $cqr = $fn.$sn.$connum.$entrydate;
    //ENCRYPTING DATA
    // $qr1=crypt($cqr, '$6$rounds=1000$YourSaltyStringz$');
    // $qr2=crypt($qr1, '$6$rounds=1000$YourSaltyStringz$');
    // $qr3=crypt($qr2, '$6$rounds=1000$YourSaltyStringz$');
    // $qr4=crypt($qr3, '$6$rounds=1000$YourSaltyStringz$');
    // $qr5=crypt($qr4, '$6$rounds=1000$YourSaltyStringz$');
    // $qr6=crypt($qr5, '$6$rounds=1000$YourSaltyStringz$');
    // $qr7=crypt($qr6, '$6$rounds=1000$YourSaltyStringz$');
    // $qr8=crypt($qr7, '$6$rounds=1000$YourSaltyStringz$');
    // $qr=serialize($qr8);
    // $qrCode = new QrCode($qr);

    //SAVE INTO DATABASE
    //INSERT USER INTO DATABASE
    $INSERT = "INSERT INTO visitor(vFirstName, vSurname, vContactNo, Guest, entryDateTime) VALUES('$fn', '$sn', '$connum', '$guest', '$entrydate')"; 
    // $UPDATE = "UPDATE visitor SET vExitDate = '$exitdate' WHERE vFirstName='$firstname' vSurname='$surname' vContactNo='$contactno'";
    //UPDATE USER WHEN SIGNING OUT
    // mysqli_query($conn,$INSERT);
    if(mysqli_query($conn,$INSERT)){
        header('Location: ../home/home.html');
    }
    else{
        header('Location:  vformfrontend.php');
    }
    // header('Location: ../home/home.html');

    
?>