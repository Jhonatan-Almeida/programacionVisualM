<?php
//iniciar la sesion
session_start();

echo "<strong>Variable normal</strong> ".$variable_normal."<br>";
echo "<strong>Variable sesion</strong> ".$_SESSION['variable_sesion']."<br>";

echo "<a href='index.php'>Regresar a index</a><br>";
echo "<a href='logout.php'>Cerrar</a>";


