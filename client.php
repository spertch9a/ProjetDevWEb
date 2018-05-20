<!DOCTYPE html>
<html>
<head>

		<title>Workers</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="workers.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	      <link type="text/css" rel="stylesheet" href="materialize.min.css"  media="screen,projection"/>


</head>
<body>
	<div class="page">
	<nav class="nav-wrapper" id="nav">
		<ul>
			<li><a href="accueil.html"> Accueil </a></li>
			<li><a href="annonce.php"> Annonces </a></li>
			<li><a href="workers.php"> Employé </a></li>
			<li><a href="inscription.php"> S'inscire </a></li>
			<li> <img id="tel" src="téléchargement.png"> N° local 041 35 26 94 </li>
		</ul>
	</nav>
</div> <br>
<div class="page">
	<div id="titleee">

		<h1 style="">Liste des employeurs :</h1> <br>
	</div>
 <table class="highlight">
 <tr>
  <th>Identifiant</th>
  <th>Nom</th>
  <th>Prenom</th>
	<th>Proffession</th>
	<th>Email</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "root", "devweb");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT username, nom, prenom ,email, proffession FROM user WHERE typeofuser ='client'  ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["username"]. "</td><td>" . $row["nom"] . "</td><td>"
. $row["prenom"]. "</td><td>"

. $row["email"].  "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</div>
</body>
</html>
