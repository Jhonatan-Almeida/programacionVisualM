<?php

/* 
 Cookie: Es un fichero que se almacena en el ordenador del usuario que visita
 * la web, con el fin de recordar datos o ratrear el comportamiendo del mismo
 * en la web.
 */
// Crear cookie
// setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);

// cookie basica
setcookie("micookie","valor de la cookie");

// cookie con expiración
setcookie("oneyear","valor del cookie 365 dias", time()+(60*60*24*365));

header("Location: ver_cookies.php");
