<?php

/* 
Sesión: Almacenar y persistir datos del usuario mientras que navega en un sitio web
 hasta que cierra sesión o cierra el navegador.
 */

//Iniciar una session

session_start();

// debe mantenerse dentro de todas las paginas a las cuales van ha recibir los dartos de sesion

$variable_normal = "Soy una variable normal";

$_SESSION['variable_sesion'] = "soy una variable que persiste en la session instanciada";

echo "<strong>Variable normal</strong> ".$variable_normal."<br>";
echo "<strong>Variable sesion</strong> ".$_SESSION['variable_sesion']."<br>";

echo "<a href='pagina1.php'>Ir a pagina 1</a><br>";
echo "<a href='logout.php'>Cerrar</a>";

