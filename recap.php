<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Liste des produits</title>
</head>

<body>

    <h1  class="text-center  fw-bold" style = "margin-top: 20px">Liste de produits</h1>

    <div class="card mx-auto p-2" style="width: 75%; margin-top: 30px">

        <?php 
            if (!isset($_SESSION['product']) || empty($_SESSION["product"])){
                echo "<p>Aucun produit en session...</p>";
            }
            else{
                echo "<table class=\"table\">",
                        "<thead>",
                            "<tr>",
                                "<th>#</th>",
                                "<th>Nom</th>",
                                "<th>Prix</th>",
                                "<th>Quantité</th>",
                                "<th>Prix Total</th>",
                            "</tr>",
                        "</thead>",
                "<tbody>";

                $totalGeneral = 0;
                foreach($_SESSION["product"] as $index => $product){
                    echo "<tr>",
                            "<td>".$index."</td>",
                            "<td>".$product["name"]."</td>",
                            "<td>".number_format($product["price"], 2, ",", "&nbsp;")."&nbsp;€</td>",
                            "<td>".$product["qtt"]."</td>",
                            "<td>".number_format($product["total"], 2, ",", "&nbsp;")."&nbsp;€</td>",
                        "<tr>";
                    $totalGeneral += $product["total"];
                }
                echo "<tr>",
                       "<td colspan=3><strong>Total général : <strong></td>",
                       "<td>".$_SESSION["quantity"]."&nbsp;</td>", 
                        "<td><strong>".number_format($totalGeneral, 2, ",", "&nbsp;")."&nbsp;€</strong></td>", 
                     "</tr>",
                 "</tbody>",
                    "</table>";
            }

            if ($_SESSION["succes"]){
                echo "Succes";
            } else {
                echo "Echec";
            }
        ?>
        
    </div>

    <form action="index.php" style = "margin-top: 20px" class = "text-center">
        <input type = "submit" name = "submit" value = "Retour" class="btn btn-outline-danger">
    </form>

</body>

</html>