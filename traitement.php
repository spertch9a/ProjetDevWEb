<?php

$username = filter_input(INPUT_POST, 'username');

$datedenaissance = _POST['datedenaissance'];
$password = filter_input(INPUT_POST, 'password');




if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "devweb";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
 die('Connect Error ('. mysqli_connect_errno() .') '
   . mysqli_connect_error());
}
else{
 $sql = "INSERT INTO user (nom,prenom,username,password,email,datedenaissance)
 values ('$firstname','$lastname','$username','$password',,'$email','$datedenaissance','$typeofuser')";

 if ($conn->query($sql)){
   echo "New record is inserted sucessfully";
 }
 else{
   echo "Error: ". $sql ."
". $conn->error;
 }
 $conn->close();
}
}
else{
 echo "Password should not be empty";
 die();
}
}
else{
 echo "Username should not be empty";
 die();
}



 ?>
