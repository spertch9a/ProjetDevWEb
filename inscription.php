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

       <br>    <!-- First name: -->

          <label for="nom" id="nom">Nom :</label>
          <input name="nom"type="text" id="nom" placeholder="Entrez votre nom">

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


        <br>

      <button id="submit" class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>

  </button>
    </form>
  </div>


 <script type="text/javascript" src="materialize.min.js"></script>
 <script type="text/javascript">


 </script>
</body>
</html>
