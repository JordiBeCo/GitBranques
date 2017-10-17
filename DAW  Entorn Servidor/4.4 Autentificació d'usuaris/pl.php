<?php
    //VARIABLES ENTRADES PER L'USUARI
    $userName = $_REQUEST["nom_usuari"];
    $userPass = $_REQUEST["passwrd"];   
    
    //ARRAY D'USUARIS
    $usersAndPasswords = array(
        "jordi" => "besalu",
        "php" => "mola",
    );

    //CREEM LES VARIABLES PER COMPROBAR QUE LA ENTRADA DE DADES ÉS CORRECTE
    $usernameIsEmpty = empty($userName);
    $userameExist = array_key_exists($userName, $usersAndPasswords);
    $passIsCorrect = $usersAndPasswords[$userName] == $userPass;
    
    //IFUS PER COMPROBAR L'ENTRADA CORRECTA DE DADES
    if ($usernameIsEmpty) {
        setcookie("mycookie","Error. El nom d'usuari és vuit.");
        header("Location: fl.php");
        die();
    }
    elseif(!$userameExist){
        setcookie("mycookie","Error. El nom d'usuari no existeix.");
        header("Location: fl.php");
        die();
    }
    elseif(!$passIsCorrect){
        setcookie("mycookie","Error. La contrassenya no és correcte.");
        header("Location: fl.php");
        die();
    }
    else {
        
        session_start();
        //EN CAS DE QUE TOT SIGUI CORRECTE REDIRIGEIX A LA PAGINA menu.php
        $_SESSION["nom_usuari"] = $userName;
        header("Location: menu.php");
    }
?>

