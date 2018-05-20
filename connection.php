<body>
  <div align="center">
    <h2>Connection</h2>
    <br> <br>

    <form method="post">
      <input type="email" name="email" placeholder="Veuillez Saisir votre mail">
      <input type="password" name="password" placeholder="Mot de passe">
      <br> <br>
      <input type="submit" name="formconnection" value="Se connecter">
    </form>
    <?php
    if(isset($erreur))
echo '<font color="red" >' .$erreur. "</font>";

     ?>
    <?php
session_start();

if(isset($_POST['formconnection'])) {
  $mailconnect = ($_POST['email']);
  $mdpconnect = ($_POST['password']);

  //verifier que l'utilisateur existe dans la base
  if(!empty($mailconnect) AND !empty($mdpconnect)) {

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "devweb";

    //retreiving data from date_create_from_format


    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM user WHERE email = ?  AND password = ?";




    $userexist = $sql->rowCount();

    $userinfo =$sql->fetch();
    $_SESSION['id'] =$userinfo[''];
    $_SESSION['pseudo'] =$userinfo['username'];
    $_SESSION['mail'] =$userinfo['email'];
  }

  echo $_SESSION['id'];

}
     ?>
  </div>
</body>
