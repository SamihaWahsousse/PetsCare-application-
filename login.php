<?php

if(isset($_POST['envoi']) && isset($_POST['mail']) && isset($_POST['password']) ){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "petsCare";
    
    // création de connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // vérifier connexion 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $mail = $_POST['mail'];
    $pwd = $_POST['password'];
    $sql = "SELECT * FROM `utilisateur` WHERE `email` = '$mail' AND `password` = '$pwd' ";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        header("Location: ./AjouterCarnetRappel.php");
    } else {
        header("Location: .");
        exit;
    }
    $conn->close();
}

?>

