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



</body>
</html>


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
			<li><a href="client.html"> Client </a></li>
			<li><a href="workers.html"> Employé </a></li>
			<li><a href="inscription.html"> S'inscire </a></li>
			<li> <img id="tel" src="téléchargement.png"> N° local 041 35 26 94 </li>
		</ul>
	</nav>
</div> <br>

 <table>
 <tr>
  <th>Id</th>
  <th>Username</th>
  <th>Password</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "root", "company");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT id, username, password FROM login";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>"
. $row["password"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
