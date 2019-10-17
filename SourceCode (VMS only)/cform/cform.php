<?php
    //ESTABLISHING CONNECTION
    require "../dbConnect/dbConnect.php";
    require "../composer.json/vendor/autoload.php";
    use Endroid\QrCode\QrCode;
   
    $fn = trim($_POST['firstname']);
    $sn = trim($_POST['surname']);
    $connum = trim($_POST['contactno']);
    $company = trim($_POST['companyname']);
    $guestType = true;
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
    if(empty($company)){
        $errors['companyName'] = "Please enter your Name";
        echo htmlspecialchars($errors["companyName"]);
        
    }
    // else{
        //RUN COMPANY NAME CHECK ON INTERNET VIA ABS OR WHITEPAGES
    // }
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

    //SAVE INTO DATABASE
    //INSERT USER INTO DATABASE
    $INSERT = "INSERT INTO Contractor(cFirstName, cSurname, cContactNo, companyName, Guest, entryDateTime) VALUES('$fn', '$sn', '$connum', '$company', '$guestType', '$entrydate')"; 
    // $UPDATE = "UPDATE visitor SET vExitDate = '$exitdate' WHERE vFirstName='$firstname' vSurname='$surname' vContactNo='$contactno'";
    //UPDATE USER WHEN SIGNING OUT
    mysqli_query($conn,$INSERT);
    // header('Location: ../home/home.html');

    
?>