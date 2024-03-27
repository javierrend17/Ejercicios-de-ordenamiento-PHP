<?php

    function insertionSort(&$arr) {
        $n = count($arr);
        for ($i = 1; $i < $n; $i++) {
            $key = $arr[$i];
            $j = $i - 1;
            while ($j >= 0 && strcasecmp($arr[$j], $key) > 0) {
                $arr[$j + 1] = $arr[$j];
                $j = $j - 1;
            }
            $arr[$j + 1] = $key;
        }
    }


    $nombres = array(
        "Juan",
        "María",
        "Carlos",
        "Laura",
        "Pedro",
        "Ana",
        "Diego",
        "Sofía",
        "Luis",
        "Elena",
        "Miguel",
        "Lucía",
        "Pablo",
        "Valeria",
        "Javier",
        "Isabel",
        "Alejandro",
        "Carmen",
        "Daniel",
        "Adriana"
    );


    echo "Lista:<br>[ ";
    foreach ($nombres as $key => $value) {
        if ($key == count($nombres)-1) {
            echo $value." ]<br><br>";
        }else {
            echo $value.", ";
        }
    }

    // Ordenando la lista
    insertionSort($nombres);

    echo "Lista ordenada:<br>[ ";
    foreach ($nombres as $key => $value) {
        if ($key == count($nombres)-1) {
            echo $value." ]<br>";
        }else {
            echo $value.", ";
        }
    }

?>
