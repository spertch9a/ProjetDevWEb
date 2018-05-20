<?php
// TODO: Move this to external file
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "devweb";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * from user WHERE username='username' AND password='password'";
  if ($result = mysqli_query($conn, $sql) ) {
     while ($row=mysqli_fetch_row($result)) {
       printf ("%s (%s) is connected\n",$row[0],$row[1]);
     }
    mysqli_free_result($result);
  } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Check login
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);


  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Connection</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="inscription.css">
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

    <form  method="post" action="connection.php">
        <label for="username" id="username"> Identifiant :</label>
        <input name="username"  type="text" id="username" placeholder="Entrez votre identifiant" >
          <label for="password" id="password">Password :</label>
          <input name="password" type="password" id="password" placeholder="Entrez votre mot de passe">
        <br>

      <button id="submit" class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>

  </button>
    </form>
  </div>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
 <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>
