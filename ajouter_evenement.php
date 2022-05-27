<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Evenement</title>
    <link rel="stylesheet" href="ajouter_evenement.css">
</head>
<body>
    <!-- <form action="" method="post">
        Event name : <input type="text" name="event_name"> <br> <br>
        Location : <input type="text" name="location"> <br> <br>
        Date : <input type="datetime" name="date"> <br><br>
        number of places : <input type="number" name="places"> <br><br>
        picture : <input type="file" name="img" id="img">

        <button type="submit">create evenement</button>

    </form> -->

    <div class="container">
        <div class="title">Ajouter un evenement</div>
        <form action="" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Event Name</span>
                    <input type="text" name="event_name" placeholder="Enter the event name" required>
                </div>
                <div class="input-box">
                    <span class="details">Location</span>
                    <input type="text" name="place" placeholder="Enter the event's place" required>
                </div>
                <div class="input-box">
                    <span class="details">Date de debut</span>
                    <input type="datetime-local" name="date_de_debut" placeholder="" required>
                </div>
                <div class="input-box">
                    <span class="details">Date de fin</span>
                    <input type="datetime-local" name="date_de_fin" placeholder="" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" name="Email" placeholder="enter your Email" required>
                </div>
                <div class="input-box">
                    <span class="details">Number of places</span>
                    <input type="number" name="Nbr_places" placeholder="number of places" required>
                </div>
                <div class="input-box">
                    <span class="details">Picture</span>
                    <input type="file" name="image" name="image" accept="image/*" class="image">
                </div>
                <div class="input-box">
                    <span class="details">Telephone</span>
                    <input type="tel" name="telephone" placeholder="numero de telephone" required>
                </div>
                <div class="input-box">
                    <span class="details">statut</span>
                    <input type="text" name="statut" placeholder="statut" autocomplete="off">
                </div>
            </div>
            <div class="button">
                <input type="submit" name="submit" value="Ajouter">
            </div>
        </form>
    </div>

</body>
</html>


<?php

    if (isset($_POST['submit'])) {
        //button clicked
        echo "Button Clicked";

        //1. Recuperer les valeurs dans le formulaire
        $event_name = $_POST['event_name'];
        $place = $_POST['place'];
        $date_de_debut = $_POST['date_de_debut'];
        $date_de_fin = $_POST['date_de_fin'];
        $Email = $_POST['Email'];
        $Nbr_places = $_POST['Nbr_places'];
        $image = $_POST['image'];
        $statut = $_POST['statut'];

        //2.requete SQL pour enregistrer dans la base de donnee
        $sql = "INSERT INTO evenement SET
        		event_name = '$event_name',
        		place = '$place',
                date_de_debut = '$date_de_debut',
        		date_de_fin = '$date_de_fin',
                Email = '$Email',
                Nbr_places = '$Nbr_places',
                statut = 'yes'
        ";

        // //3.Execute Query and save in database
        $conn = mysqli_connect('localhost', 'root', '') or die(mysql_errno());//database connection
        $db_select = mysqli_select_db($conn, 'bdd') or die(mysql_error());//selecting database

            // if($conn -> connect_error){
            // 	die('ERREUR: ' .$conn->connect_error);
            // }
            // echo 'connexion reussie';

        //4.execution de la requete et enregistrement des donnees dans la base
        $res = mysqli_query($conn, $sql);

        //5.

        if ($res==TRUE) {
            echo "data inserted";
        }else{
            echo "data not inserted ".mysqli_error($conn);
        }

    }

?>


