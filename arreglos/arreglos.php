<?php

//El arreglo es un conjunto de datos utilizables como uno sola variable , contenedor de datos

//$arreglo = array(elememtos);
//$arreglo =[];
                //      0        1       2
$zapatillas = array('Nike','Reebok','Jordan');

//echo print  print_r   var_dump

//echo.- no imprimer el detalle del arreglo, solo cadena cadena de caracteres
//print.- no imprimer el detalle del arreglo, solo cadena cadena de caracteres
//print_r .- imprime cada unos de los elementos del arreglos
//var_dump.- imprime cada unos de los elementos del arreglo con su detalle respectivo 
echo "<h1>Arreglo con var_dump</h1>";
var_dump($zapatillas);

echo "<br>";
echo "<h1>Elemento del Arreglo con echo</h1>";
echo $zapatillas[1]."<br>";
echo "<br>";


//foreach ($zapatillas as $key => $value) {
//    
//}
//          arreglo         valor del elemento
//foreach ($zapatillas as $value) {
//    
//}
echo "<h1>Despliege de los elementos del Arreglo con foreach</h1>";
foreach ($zapatillas as $zapatilla){
    echo $zapatilla."<br>";
}

echo "<br>";
echo "<h1>Arreglos con identificaciones</h1>";

$personas=[array('nombre'=>'Roger Bueno',
        'direccion'=>'Los pericos',
        'sexo'=>'Masculino',
        'telefono'=>'0999999999',
        'edad'=>18),
         array('nombre'=>'Cristopher Paredes',
        'direccion'=>'Los pericos',
        'sexo'=>'Masculino',
        'telefono'=>'0999999999',
        'edad'=>18),   
        array('nombre'=>'Josting Vera',
        'direccion'=>'Los pericos',
        'sexo'=>'Masculino',
        'telefono'=>'0999999999',
        'edad'=>18)
];

var_dump($personas);
echo "<br>";
print_r($personas);
echo "<br>";
echo "el nombre es: ".$personas['nombre']." la edad es: ".$personas['edad'];
echo "<br>";
echo "<br>";
foreach ($personas as $key => $persona) {
    echo "La persona ".$persona['nombre']." tiene la direcció: ".$persona['direccion']." su sexo es: "
            .$persona['sexo']. " su telefono es: ".$persona['telefono']." y su edad es de: ".$persona['edad']."<br>";
}