<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="traitement.css">
    <title>traitement</title>
</head>
<body>
    <div class="container">
        <div class="element">
            <?php @$a = $_GET['nom']; ?> 
            <p>l'evenement a ete supprimer avec succes par <?php echo @$_GET['nom'];?> </p>
        </div>
    </div>
</body>
</html>