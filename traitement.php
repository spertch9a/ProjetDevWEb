<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "devweb";

//retreiving data from date_create_from_format

$nom = ($_POST ['nom']) ? $_POST ['nom'] : "Unamed";
$prenom = ($_POST['prenom']) ? $_POST['prenom'] : "Unamed";
$pseudo = ($_POST['username']) ? $_POST['username'] : "No Username";
$motdepasse = ($_POST['password']);
$email = ($_POST['email']);
$datedenaissance = ($_POST['datedenaissance']);
$typeofuser=($_POST['typeofuser']);
$proffession=($_POST['proffession']);
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user (nom, prenom, username, password, email, datedenaissance,typeofuser)
VALUES ('$nom', '$prenom', '$pseudo' , '$motdepasse' , '$email' , '$datedenaissance' ,'$typeofuser')";
//si l'utilisateur est un employeur
$sql1 = "INSERT INTO `client` (`nom`, `prenom`, `username`, `password`, `email`, `datedenaissance`)
VALUES ('$nom', '$prenom', '$pseudo', '$password', '$email', '$datedenaissance')";
$sql2 = "INSERT INTO `Workers` (`nom`, `prenom`, `username`, `password`, `email`, `datedenaissance`, `proffession`)
VALUES ('$nom', '$prenom', '$pseudo', '$password', '$email', '$datedenaissance', '$proffession')";
if($typeofuser == 'worker') {
  mysqli_query($conn, $sql2) ;
} else{ //si l'utilisateur a choisis client ou 'both'
  mysqli_query($conn,$sql1);
}

if (mysqli_query($conn, $sql) ) {
   echo "New record created successfully";

} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
