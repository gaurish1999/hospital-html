<?php

$servername = 'localhost';
$username = "root";
$password = "password";
$dbname = "hospital";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$address = $_REQUEST['address'];
$aadhar = $_REQUEST['aadhar'];
$id= '5';
$patientName =  $_REQUEST['patientName'];
$dob = $_REQUEST['d_o_b'];
$age = $_REQUEST['putagehere'];
$sex = $_REQUEST['sex'];
$weightAtBirth  =  $_REQUEST['weightAtBirth'];
$diagnosis = $_REQUEST['diagnosis'];
$dateOfAdmission =  $_REQUEST['dateOfAdmission'];
$weightAdmission = $_REQUEST['weightAdmission'];
$dateofDischarge =  $_REQUEST['dateofDischarge'];
$weightDischarge= $_REQUEST['weightDischarge'];
    
$sql = "INSERT INTO healthCare  VALUES ('$address', '$aadhar', '$id', '$patientName', 
'$dob', '$age', '$sex', '$weightAtBirth', '$diagnosis', '$dateOfAdmission', 
'$weightAdmission', '$dateofDischarge', '$weightDischarge');";
    
    
    if(mysqli_query($conn, $sql)){
    echo "<h3>dData added in the database.</h3>"; 

  
    } else{
    echo "ERROR: Uh oh! <br/><br/><i>$sql.</i><br/><br/> " 
        . mysqli_error($conn);
    }

// Close connection
mysqli_close($conn);
?>