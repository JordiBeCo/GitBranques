<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Formulari Loggin</title>

</head>

<body>

<div style="margin: 30px 10%;">
<h3>My form</h3>
<form action="pl.php" method="post" id="myform" name="myform">
<?php
        //COMPROVA SI LA COOKIE EXISTEIX, SI ÉS AIXI LA IMPRIMEIX PER PANTALLA, UN COP LA HA IMPRES PER PANTALLA LA ELIMINA
        if (isset($_COOKIE["mycookie"])) {
            $valor_cookie = htmlspecialchars($_COOKIE["mycookie"]);
            echo($valor_cookie);
            setcookie("mycookie","",time()-1);
        }
?>
    <br>
    <br>
    <label>Introdueix el nom d'usuari: </label> <input type="text" value="" size="30" maxlength="100" name="nom_usuari" /><br /><br />
    <label>Introdueix la passwd: </label> <input type="text" value="" size="30" maxlength="100" name="passwrd" /><br /><br />
    
    <button id="mysubmit" type="submit">Submit</button><br /><br />


</form>
</div>

</body>
</html>