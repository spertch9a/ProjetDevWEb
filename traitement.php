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
if($typeofuser == 'worker') {
$sql2 = "INSERT INTO `Workers` (`nom`, `prenom`, `username`, `password`, `email`, `datedenaissance`, `proffession`)
 VALUES ('$nom', '$prenom', '$username', '$password', '$email', '$datedenaissance', '$proffession')";

}
if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2) ) {
   echo "New record created successfully";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
