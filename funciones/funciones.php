<?php
//Una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto 
// y que puede reutilizarse solamente cuando invocan a la función , tantas veces como 
// queramos

//function <nombre de la función(<parametros>){
//     conjunto de instrucciones;
//} 

function nombre(){
    echo "Mi nombre es Jhonatan Cesar ";
}

function apellidos(){
    echo " Mis Apellidos son Almeida Vaca";
}

//nombre();

function nombresCompletos(){
    nombre()." ".apellidos();
}

//nombresCompletos();

// funcion 
function listaEstudaintes(){
    $html = "Cristopher Paredes<br>";
    $html.= "Josting Vera<br>";
    $html.= "Katya Valarezo<br>";
    $html.= "Roger Bueno<br>";
    $html.= "Yomaira Espinoza<br>";
    
    $cadena = "Mi nombre es Jhonatan";
    $cadena.= "Mi apellidos es Almeida";
        
    return $html;
}
// llamado de la funcion;
//echo listaEstudaintes();
//echo listaEstudaintes();
//echo listaEstudaintes();
//echo listaEstudaintes();

function tabla ($numero){
    $tabla = "<h1> La tabla de multiplicar del ".$numero."</h1><br>";
     for($i=0;$i<=10;$i++){
        $tabla .= "El resultado de la multiplicaciób de ".$numero. " * " .$i. " = ".$numero*$i."<br>"; 
    }
    return $tabla;
}
 echo tabla(5);
