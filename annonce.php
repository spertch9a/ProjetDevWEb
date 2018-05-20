<?php
 $db = mysqli_connect("localhost", "root", "root", "devweb");
 $result = mysqli_query($db, "SELECT * FROM annonce");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="inscription.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="materialize.min.css"  media="screen,projection"/>
	<style media="screen">
		.form-container{
			padding: 1%;
		}
	</style>
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

    <div class="form-container">
			<h1>Annonce</h1>
			<form  method="post" action="ajouterannonce.php">
				<div class="input-field">
					<label for="titre" id="titre">Titre</label>
						<input name="titre"type="text" id="titre" placeholder="Entrez votre titre">
				</div>

				<div class="input-field">
					<label for="delais" id="delais">
						<span>Delais (jours)</span>
					</label>
					<input name="delais"type="text" id="delais" placeholder="Entrez votre delais">
				</div>

				<div class="input-field">
					<label for="budget" id="budget">
						<span>Budget (Dinars Algerian)</span>
					</label>
						<input name="budget"type="text" id="budget" placeholder="Entrez votre budget">
				</div>

					<!-- <div class="file-field input-field">
						<div class="btn">
							<span>Image</span>
							<input type="file" name="image">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div> -->
					<div class="input-field">
						<label for="Description" id="description">Description</label>
						<textarea name="Description" id="Description" class="materialize-textarea" rows="8"></textarea>
					</div>
				<button id="submit" class="btn waves-effect waves-light" type="submit" name="action">Submit
					<i class="material-icons right">send</i>
				</button>
			</form>
    </div>
  </div>

<div class="page">
<h1>Annoces postés: </h1>
	<?php
     while ($row = mysqli_fetch_array($result)) {
       echo "<div > <h3>";
       	echo $row['titre']. "</h3> <br>";
				echo "<table> <tr> <td> Delais (jours ): " .$row['delais'] . " </td><td> Budget:  " .$row['budget'] ." Dinars  </td></tr></table>";
				echo "";
				echo "<h4>Description:  <h4> <br> <p>".$row['description']. "</p>";
       echo "</div> <br>";
echo "__________________________________________________________________________________";
echo "<br>";
     }
   ?>
 </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
 <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
 <script type="text/javascript">
	// TODO
 </script>
</body>
</html>
