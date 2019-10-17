<?php
 
$servername = "localhost";
$username = "jeff";
$password = "123";
$db = "wsda";
 
 

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    echo'Connection error'.mysqli_connect_error();
}
?>