<?php
//
// try {
//   $connection = new PDO('mysql:host = localhost; dbname=devweb',
//   //login username
//     'root',
//   //password
//     'root'
//   );
//
// $nom= $_POST['nom'];
// $prenom = $_POST['prenom'];
// $username= $_POST['username'];
//
//
// //requete d'insertion
// $requete = $connection->prepare("INSERT INTO user (nom,prenom,username) VALUES ('oussa','ous','use')");
// $requete->execute();
// // $requete = "INSERT INTO user (nom,prenom,username,password,email,datedenaissance)
// // $requete = "INSERT INTO user (nom,prenom,username)
// // VALUES ('oussa','ous','use')";
//
// // $connection->exec($requete);
// echo 'Insertion faite avec succés';
// }
// catch (Exception $e) {
//   echo 'Erreur : ' . $e->getMessage();
// }
//
// //execution de la requete

 ?>

 <?php
$conn = mysqli_connect("localhost", "root", "root", "company");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO user (nom,prenom,username) VALUES ('oussa','ous','use')";
  $result = $conn->query($sql);

$conn->close();
?>
