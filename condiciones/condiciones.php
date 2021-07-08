<?php

// if else
//El constructor if es una de las características más importantes de muchos lenguajes, incluido PHP. Permite la ejecución condicional
//de fragmentos de código. PHP dispone de una estructura if que es similar a la de C:
//if (condicion){
//    codigo a ejecutarse si la condición es correcta 
//}esle{
//    si la condiciones es incorrecta
//}
print_r ($_GET);
echo "<br>";
echo "<h1>if</h1>";
$edad = $_GET['edad'];

if ($edad < 18 ){
    // echo, print, print_r, var_dump 
    echo "La persona es menor de edad y no puede votar";
}else{
    echo "La persona es mayor de edad y puede votar";
}
 //else if

//elseif, como su nombre lo sugiere, es una combinación de if y else. Del mismo modo que else, 
//extiende una sentencia if para ejecutar una sentencia diferente en caso que la expresión if 
//original se evalúe como false. Sin embargo, a diferencia de else, esa expresión alternativa 
//sólo se ejecutará si la expresión condicional del elseif se evalúa como true. Por ejemplo, 
//el siguiente código debe mostrar a es mayor que b, a es igual que b o a es menor que b:
        
//<?php
//if ($a > $b) {
//    echo "a es mayor que b";
//} elseif ($a == $b) {
//    echo "a es igual que b";
//} else {
//    echo "a es menor que b";
//}
//
echo "<br>";
echo "<h1>elseif</h1>";
$a = $_GET['a']; //5
$b = $_GET['b']; //8

if ($a > $b) {
    echo "a es mayor que b";
} elseif ($a == $b) {
    echo "a es igual que b";
} else {
    echo "a es menor que b";
}

//La sentencia switch es similar a una serie de sentencias IF en la misma expresión. 
//En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores 
//diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente 
//la expresión switch.

echo "<br>";
echo "<h1>swich</h1>";

$color= $_GET['color'];
//isset.- si existe
//empty.- si esta vacio
//is_null.- si es null

if(isset($color)){
    switch ($color) {
        case 0:
            echo "El color es igual a Rojo";
            break;
        case 1:
            echo "El color es igual a Verde";
            break;
        case 2:
            echo "El color es igual a Azul";
            break;
        case 3:
            echo "El color es igual a Amarillo";
            break;
    }
}
echo '<br>case 0:
        echo "El color es igual a Rojo";
        break;<br>
    case 1:
        echo "El color es igual a Verde";
        break;<br>
    case 2:
        echo "El color es igual a Azul";
        break;<br>
    case 3:
        echo "El color es igual a Amarillo";
        break;';