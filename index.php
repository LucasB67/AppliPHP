<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="#">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Ajout produit</title>
    </head>

    <body>

        <h1  class="text-center fw-bold" style = "margin: 20px">Ajouter un produit</h1>

        <form action="traitement.php" method="post"  class="card text-center mx-auto p-2" style="width: 450px;">

            <p style = "margin-top: 20px">
                <label style="width: 250px">
                    <input type="text" name="name" placeholder="Nom du produit" class="form-control">
                </label>
            </p>

            <p style = "margin-bottom: 0px">
                <label class="input-group mb-3 mx-auto p-2" style="width: 190px">
                    <input type="number" step = "any" name = "price" placeholder="Prix unitaire" class="form-control">
                    <span class="input-group-text">€</span>
                </label>
            </p>

            <p >
                <label class="input-group mb-3 mx-auto p-2" style="width: 250px; margin-bottom: 0px">
                    <span class="input-group-text">Quantité</span>
                    <input type="number" name = "qtt" value = "1" placeholder="Quantité désirée" class="form-control"> 
                </label>
            </p>

            <p style = "margin-bottom: 20px">
                <input type = "submit" name = "submit" value = "Ajouter le produit" class="btn btn-primary">
            </p>

        </form>

    <form action="recap.php" style = "margin-top: 20px" class = "text-center">
        <input type = "submit" name = "submit" value = "Voir la liste" class="btn btn-outline-success">
    </form>

    <?php

        session_start();

        if ($_SESSION["succes"]){
            echo "<p class='card text-center mx-auto p-2'>Succes</p>
            ";
        } else {
            echo "<p class='card text-center mx-auto p-2'>Echec</p>";
        }

    ?>

    </body>


</html>