<?php

/* 
 Un bucle o ciclo, en programación, es una secuencia de instrucciones de código que se ejecuta repetidas veces, 
 * hasta que la condición asignada a dicho bucle deja de cumplirse.
 * Los tres bucles más utilizados en programación son el bucle while, el bucle for y el bucle do-while.
 *while(codicion){
    Secuencia de instrucciones dadas;
}
 * 
 for($i=0;$i<=10;$i++){
 *      Secucnuca de intrucciones dadas;
 * }
 * 
 *  * INCREMENTALES - DECREMENTALES
 * $num ++; $num=$num +1; $num+1;
 * $num --; $num=$num -1; $Num-1; 
 * 
 * /*
 * do{
 *     Secuencia de intrucciones dadas;
 * }while(condición)
 */

$num = $_GET['num'];
if(isset($_GET['num'])){
    $in = 0;
    echo "<h1>Tabla de multiplicar del ".$num." dada por while</h1>";
    while($in <= 10){
        echo $num. " * " .$in. " = ".$num*$in."<br>";  
        $in++;
    }

    echo "<br>";
    echo "<h1>Tabla de multiplicar del ".$num." dada por FOR</h1>";

    for($i=0;$i<=10;$i++){
        echo $num. " * " .$i. " = ".$num*$i."<br>"; 
    }
   $cre= 0;
    echo "<br>";
    echo "<h1>Tabla de multiplicar del ".$num." dada por DO-WHILE</h1>";
    do{
        echo $num. " * " .$cre. " = ".$num*$cre."<br>";  
        $cre++;
    }while($cre <= 10);
}else{
    echo "no existe ninguna variable enviada por GET....!!!";
}







