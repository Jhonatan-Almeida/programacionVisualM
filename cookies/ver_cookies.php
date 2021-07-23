<?php

/* 
Para mostrar el valor de las cookies, tengo que usar $_COOKIE, una variable superglobal,
es un array asociativo.
 */

if (isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1><br>";
}else{
    echo "No existe la variable de cookie<br>";
}

if (isset($_COOKIE['oneyear'])){
    echo "<h1>".$_COOKIE['oneyear']."</h1><br>";
}else{
    echo "No existe la variable de cookie<br>";
}
?>
<a href="crear_cookie.php">Crear Cookie</a><br>
<a href="borrarcookies.php">Borrar Cookie</a>

