<?php
//TODO:
//1.  ESTABLISH CONNECTION
require "../dbConnect/dbConnect.php";


//2.  PREPARED STATMENT
    //Submission form
    // if(isset($_GET['submit'])){

        $fn = trim($_POST['firstname']);
        $sn = trim($_POST['surname']);
        $connum = trim($_POST['contactno']);
        $exitdate = date('Y-m-d H:i:s');

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


        $findUser = "SELECT * FROM visitor WHERE vFirstName='$fn' AND vSurname='$sn' AND vContactNo='$connum'";
        if ($conn->query($findUser) === TRUE) {
            //find latest record to update
            $result = $mysqli->query($findUser);
            $row = $result->fetch_array();

            //update time
            $sql = "UPDATE visitor SET exitDateTime = '$exitdate' WHERE vFirstName='$fn' AND vSurname='$sn' AND vContactNo='$connum'";
            if ($conn->query($sql) === TRUE) {
                echo "User signed out";
                // header('Location: ../home/home.html');
            } 
            else {
                echo "Error signing out: " . $conn->error;
            }
        } 
        else {
            echo "No matches found";
        }

        
              
        $conn->close();
    // }

    function makeArray(){
        for()

        return $list;
    }
?>   

    
