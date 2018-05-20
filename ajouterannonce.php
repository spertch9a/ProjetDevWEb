<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "devweb";

//retreiving data from date_create_from_format

$titre = ($_POST ['titre']) ? $_POST ['titre'] : "Pas De titre";
$delais = ($_POST['delais']);
$budget = ($_POST['budget']) ;
$description = ($_POST['Description']);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO annonce (titre,delais,budget,description) VALUES ('$titre','$delais','$budget','$description')";


if (mysqli_query($conn, $sql) ) {
   echo "New record created successfully";

} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

    header("http://localhost:8080/ProjetDevWEb/annonce.php");
    exit;

?>
