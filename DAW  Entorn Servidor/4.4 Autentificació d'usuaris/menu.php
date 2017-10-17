<?php
session_start();
if (!isset($_SESSION["nom_usuari"])){
     var_dump($_SESSION);
    header("Location: fl.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h1>Aquest secret nomes és conegut per un numero limitat de persones :D </h1>
    </body>
</html>