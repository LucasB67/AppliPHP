<?php

    session_start();
    
    if(isset($_POST["submit"])){

        $_SESSION["succes"] = False;

        $name  = filter_input(INPUT_POST, "name",  FILTER_UNSAFE_RAW);
        $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $qtt   = filter_input(INPUT_POST, "qtt",   FILTER_VALIDATE_INT);

        if ($name && $price && $qtt){

            $product = [
                "name"  => $name,
                "price" => $price,
                "qtt"   => $qtt,
                "total" => $price*$qtt
            ];

            if (isset($_SESSION["quantity"])){
                $quantity = $_SESSION["quantity"] + $qtt;
            } else {
                $quantity = $qtt;
            }

            $_SESSION["succes"] = True;

            $_SESSION["product"][] = $product;
            $_SESSION["quantity"] = $quantity;
        }

    }

    header("Location:index.php");

?>