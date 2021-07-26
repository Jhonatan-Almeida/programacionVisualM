<?php
 if (isset($_POST['titulo']) && isset($_POST['descripcion'])){
     echo "el titulo del formulario es: ".$_POST['titulo']." y la descripcion es: <br>".$_POST['descripcion'];
     echo "el sexo es :";
     if ($_POST['sexo'] == 0){
         echo "Hombre";
     }else{
         echo "Mujer";
     };
     echo "<br>";
     echo "El color es: ".$_POST['color'];
     echo "<br>";
     echo "la Url es: ".$_POST['url'];
 }

 
 /* 
Ejercicio 3. Hacer una interfaz de usuario(formulario) con dos inputs y 4 botones
 * uno para sumar, restar, dividir y multiplicar.
 */