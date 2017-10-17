<?php
    $nom_cookie = "laMevaCookie";
    //SI LA COOKIE ESTA CREADA LI SUMA 1 AL VALOR DE LA COOKIE, SI NO HO ESTA LA CREA.
    if (isset($_COOKIE[$nom_cookie])) {
        setcookie($nom_cookie, htmlspecialchars($_COOKIE["laMevaCookie"])+1);
    }
    else{setcookie($nom_cookie, 100);}
?>


<html>
<head>
      <meta charset="UTF-8"></meta charset>
</head>
      <body>
          <h1>P1</h1>

<a href="p2.php">Pagina 2</a>
</body>
</html>