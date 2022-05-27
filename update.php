

<?php

    $conn = mysqli_connect('localhost', 'root', '') or die(mysql_error());//database connection
    $db_select = mysqli_select_db($conn, 'bdd') or die(mysql_error());//selecting database

    if($conn -> connect_error){
        die('ERREUR: ' .$conn->connect_error);
    }
    echo 'connexion reussie';

    //Query to Get all Admin
    $sql = "SELECT * FROM evenement";
    //Executer la requete
    $res = mysqli_query($conn, $sql);



    // echo $id = $_GET['id'];

?>



