<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h2>Ejercicio de ordenamiento con Bubble Sort</h2>
    <form action="" method="POST">
        <input type="number" name="largo" placeholder="Largo de la lista">
        <button type="submit">Generar</button>
    </form>
</body>
</html>


<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<pre>";
        $largo = $_POST["largo"];
        

        //Generando lista con numeros aleatorios
        $numeros = array();
        for ($i = 0; $i <= $largo-1; $i++) {
            $numeros[$i] = rand(-($largo/2), $largo);
        }


        //Imprimiendo lista generada
        echo "<h3>Lista generada:</h3><br>";
        echo "[";
        for ($i = 0; $i < count($numeros); $i++) {
            echo $numeros[$i];
            if ($i != count($numeros) - 1) {
                echo ", ";
            }
        }
        echo "]<br><br>";


        //Usando el algoritmo Bubble Sort
        $memoria = 0;
        while ($largo != 0) {
            for ($i=0; $i < $largo-1; $i++) { 
                if ($numeros[$i] >= $numeros[$i+1]) {
                    $memoria = $numeros[$i];
                    $numeros[$i] = $numeros[$i+1];
                    $numeros[$i+1] = $memoria;
                }
            }
            $largo--;
        }


        //Revirtiendo el array para organizar los elementos de forma descendente
        $numeros = array_reverse($numeros);
        

        //Imprimiendo lista ordenada
        echo "<h3>Lista ordenada:</h3><br>";
        echo "[";
        for ($i = 0; $i < count($numeros); $i++) {
            echo $numeros[$i];
            if ($i != count($numeros) - 1) {
                echo ", ";
            }
        }
        echo "]<br><br>";
        echo "<pre>";

    }
?>