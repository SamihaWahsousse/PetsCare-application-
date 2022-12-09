<?php

if(isset($_POST['creerCarnet'])){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petsCare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `client` WHERE `id` = ". $_POST['id_client'];
$result = $conn->query($sql);

if ($result->num_rows == 1) {

    $nom = $_POST['nom_animal'];
    $categorie = $_POST['categorie_animal'];
    $date_naissance = $_POST['date_naissance'];
    $date_vaccination = $_POST['date_vaccination'];
    $date_rappel = $_POST['date_rappel'];

    $insertQuery = "INSERT INTO carnet(NomAnimal, CategorieAnimal, DateNaissance, DateVaccination, DateRappel) VALUES('$nom','$categorie', '$date_naissance', '$date_vaccination', '$date_rappel')";

    if($conn->query($insertQuery) === TRUE)
    {
        echo "carnet ajouté";
    } else {
        echo "carnet non ajouté";
    }
        
    } else {
        echo "le client n'existe pas";
        exit;
    }
    $conn->close();
}

?>

