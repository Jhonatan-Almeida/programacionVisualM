<?php

echo "<br>";
    echo "<h1>Tabla de multiplicar multinivel</h1>";

    for($i=0;$i<=10;$i++){
        echo "<h1>Tabla de multiplicar del ".$i."</h1>";
        for($j=0;$j<=10;$j++){
            echo $j. " * " .$i. " = ".$j*$i."<br>";
        }
    }
