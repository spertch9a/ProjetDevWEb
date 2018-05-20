<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
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
			<li><a href="client.html"> Client </a></li>
			<li><a href="workers.php"> Employé </a></li>
			<li><a href="inscription.php"> S'inscire </a></li>
			<li> <img id="tel" src="téléchargement.png"> N° local 041 35 26 94 </li>
		</ul>
	</nav>
    <form  method="post" action="traitement.php">
        <label for="titre" id="titre">
          <input name="titre"type="text" id="titre" placeholder="Entrez votre titre">
					<span>titre</span>
				</label>
        <label for="delais" id="delais">
          <input name="delais"type="text" id="delais" placeholder="Entrez votre delais">
					<span>Delais (jours)</span>
				</label>
        <div class="input-field">
					<label for="Description" id="delais">Description</label>
					<textarea name="Description" id="Description" class="materialize-textarea" rows="8"></textarea>
        </div>

				<!-- Last name:  -->
        <br>

			 <label for="prenom" id="prenom">Prenom :</label>
        <input name="prenom" type="text" id="prenom" placeholder="Entrez votre prenom">
        <br>
        <!-- Date:   -->

        <label for="username" id="username"> Identifiant :</label>
        <input name="username"  type="text" id="username" placeholder="Entrez votre identifiant" >

        <br>


        <!-- Email:  -->

          <label for="email" id="email">Email :</label>
          <input name="email" type="email" id="email" placeholder="Entrez votre mail" >
        <br>

          <label for="password" id="password">Password :</label>
          <input name="password" type="password" id="password" placeholder="Entrez votre mot de passe">
        <br>

        <label for="datedenaissance" id="datedenaissance"> Date de naissance :</label>
        <input type="date" name="datedenaissance" value="" id="datedenaissance" >

        <br>

        Vous êtes : <br>
        <label for="client">
					<input type="radio" name="typeofuser" checked value="client" id="client">
					<span>Client</span>
				</label>
        <label for="worker">
					<input type="radio" name="typeofuser" value="worker" id="worker">
        	<span>Worker</span>
				</label>
        <label for="both">
					<input type="radio" name="typeofuser" value="both" id="both">
					<span>Both</span>
				 </label>
<div id="professionDiv">

	<label for="proffession" id="proffession">Veuillez saisir vortre proffession</label>
	<input name="proffession" type="text" id="proffession" placeholder="ex: Plomberie">
</div>

        <br>

      <button id="submit" class="btn waves-effect waves-light" type="submit" name="action">Submit
    		<i class="material-icons right">send</i>
			</button>
    </form>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
 <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
 <script type="text/javascript">
 var checkBoxes = document.getElementsByName('typeofuser');
 var professionDiv = document.getElementById('professionDiv');
 professionDiv.style.display = 'none';

 for (var i = 0; i < checkBoxes.length; i++) {
   checkBoxes[i].addEventListener("click", function(evt) {
     if(document.getElementById('worker').checked) {
       professionDiv.style.display = 'block';
     } else {
       professionDiv.style.display = 'none';
     }

   })
 } </script>
</body>
</html>
