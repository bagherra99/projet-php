<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
        <form action="traitement.php" method="GET">
            <h2>bonjour <?php echo @$_GET['nom'];?></h2>
            <input class="entree" type="text" name="nom" placeholder="name">
            <p>Voulez-vous arreter l'evenement ?</p>
            <div class="btns">
                <button id="btn" class="btn1" type="submit" onclick="">Valider</button>
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>