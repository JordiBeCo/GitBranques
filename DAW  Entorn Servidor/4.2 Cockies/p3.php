<html>
<head>
      <meta charset="UTF-8"></meta charset>
</head>
      <body>
          <h1>P3</h1>
<?php
//ASIGNA EL VALOR DE LA COOKIE A UNA VARIABLE I L'IMPRIMEIX
$valor_cookie = htmlspecialchars($_COOKIE["laMevaCookie"]);
echo 'La cookie té el valor de: ' . $valor_cookie;

?>
<a href="p1.php">Pagina 1</a>
</body>
</html>