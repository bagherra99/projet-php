<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="evenement.css">
</head>
<body>

    <header class="header">
        <nav>
            <ul>
                <li>Arret des ventes</li>
                <li>autre chose</li>
            </ul>
        </nav>
    </header>

    <div class="btn_ajout">
        <a href="ajouter_evenement.php">ajouter evenement</a>
    </div>

    <!-- <div class="container">
        <div class="element1 element">
            <div class="btns_container">
                <button id="btn_eve" class="btns btn1" type="submit">Stop</button>
                <button class="btns btn2" type="submit">remove</button>
            </div>
        </div>
        <div class="element2 element">
            <div class="btns_container">
                <button id="btn_eve" class="btns btn1" type="submit">Stop</button>
                <button class="btns btn2" type="submit">remove</button>
            </div>
        </div>
        <div class="element3 element">
            <div class="btns_container">
                <button id="btn_eve" class="btns btn1" type="submit">Stop</button>
                <button class="btns btn2" type="submit">remove</button>
            </div>
        </div>
        <div class="element4 element">
            <div class="btns_container">
                <button id="btn_eve" class="btns btn1" type="submit">Stop</button>
                <button class="btns btn2" type="submit">remove</button>
            </div>
        </div>
        <div class="element5 element">
            <div class="btns_container">
                <button id="btn_eve" class="btns btn1" type="submit">Stop</button>
                <button class="btns btn2" type="submit">remove</button>
            </div>
        </div>
        <div class="element6 element">
            <div class="btns_container">
                <button id="btn_eve" class="btns btn1" type="submit">Stop</button>
                <button class="btns btn2" type="submit">remove</button>
            </div>
        </div>
        <div class="element7 element">
            <div class="btns_container">
                <button id="btn_eve" class="btns btn1" type="submit">Stop</button>
                <button class="btns btn2" type="submit">remove</button>
            </div>
        </div>
        <div class="element8 element">
            <div>

            </div>
            <div class="btns_container">
                <button id="btn_eve" class="btns btn1" type="submit">Stop</button>
                <button class="btns btn2" type="submit">remove</button>
            </div>
        </div> -->
    </div>

    <script src="/script.js"></script>
</body>
</html>

<?php
    $conn = mysqli_connect('localhost', 'root', '') or die(mysql_error());//database connection
    $db_select = mysqli_select_db($conn, 'bdd') or die(mysql_error());//selecting database

    //Query to Get all Admin
    $sql = "SELECT * FROM evenement";
    //Executer la requete
    $res = mysqli_query($conn, $sql);

    //check whether the query is executed or not
    if($res == TRUE){
        //count rows to check whether we have data in database or not
        $rows = mysqli_num_rows($res);// function to get all the rows in database

        //check the num of rows
        if($rows > 0){
            //we have data in database
            while($rows = mysqli_fetch_assoc($res)){
                //Using while loop to get all the data from database.
                //And while loop will run as long as we have data in database

                //Get individual data
                $id = $rows['id'];
                $event_name = $rows['event_name'];
        		$place = $rows['place'];
                $date_de_debut = $rows['date_de_debut'];
        		$date_de_fin = $rows['date_de_fin'];
                $Email = $rows['Email'];
                $Nbr_places = $rows['Nbr_places'];
                // $telephone = $rows['telephone'];

                //display the values in our table
                ?>

                    <!-- <div class="container">
                        <div class="element5 element">
                            <div class="infos">
                                <span><?php echo $id; ?></span>
                                <h4>nom de l'evenement : <?php echo $event_name; ?></h4>
                                <div>location : <?php echo $place; ?></div>
                                <div>Date de debut : <?php echo $date_de_debut; ?></div>
                                <div>Date de fin : <?php echo $date_de_fin; ?></div>
                                <div>Email : <?php echo $Email; ?></div>
                                <div>Nombre de places : <?php echo $Nbr_places; ?></div>
                            </div>
                            <div class="btns_container">
                                <a href="update.php" class="btns btn1">Stop</a>
                                <button class="btns btn2" type="submit">remove</button>
                            </div>
                        </div>
                    </div> -->

                    <div class="container">
                        <div>
                            <div class="infos">
                                <span><?php echo $id; ?></span>
                                <h4>nom de l'evenement : <?php echo $event_name; ?></h4>
                                <div>location : <?php echo $place; ?></div>
                                <div>Date de debut : <?php echo $date_de_debut; ?></div>
                                <div>Date de fin : <?php echo $date_de_fin; ?></div>
                                <div>Email : <?php echo $Email; ?></div>
                                <div>Nombre de places : <?php echo $Nbr_places; ?></div>
                            </div>
                        </div>
                    </div>

                <?php

            }
        }
        else{
            //we do not have data in database
        }
    }

    if (isset($_POST['submit'])) {
        echo "Button Clicked";

    }

?>

