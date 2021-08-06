<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Operadores de comparacion

// == compara si el valor numero o cadena de caracter es igual
// === compara lo del primer comparador y tambien el typo de variable 
// != compara que sean diferentes <>   
// !== campara que sean diferente y diferente tipo de dato
// >= mayor igual a un valor dado 
// <= menor igual a un valor dado 

// Operadores Logico

//&& and
// || or

 //       v      &&     v       = v
 //       v      &&     f       = f
 //       f      &&     v       = f
 //       f      &&     f       = f
if (condicion1 && condicion2 ){
    //verdadero
}else{
    // falso
}
 //       v      &&     v       = v
 //       v      &&     f       = v
 //       f      &&     v       = v
 //       f      &&     f       = f             
if (condicion1 || condicion2 ){
    //verdadero
}else{
    // falso
}

