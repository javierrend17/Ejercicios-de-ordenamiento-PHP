<?php

    function mergeSort($array) {
        $count = count($array);
        if ($count <= 1) {
            return $array;
        }

        $middle = (int) ($count / 2);
        $left = array_slice($array, 0, $middle);
        $right = array_slice($array, $middle);

        $left = mergeSort($left);
        $right = mergeSort($right);

        return merge($left, $right);
    }

    function merge($left, $right) {
        $result = [];
        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] <= $right[0]) {
                $result[] = array_shift($left);
            } else {
                $result[] = array_shift($right);
            }
        }

        while (count($left) > 0) {
            $result[] = array_shift($left);
        }

        while (count($right) > 0) {
            $result[] = array_shift($right);
        }

        return $result;
    }

    $palabras = array(
        "gato",
        "perro",
        "casa",
        "jardín",
        "sol",
        "luna",
        "computadora",
        "árbol",
        "playa",
        "montaña",
        "agua",
        "ciudad",
        "libro",
        "papel",
        "pluma",
        "nube",
        "coche",
        "bicicleta",
        "avión",
        "barco"
    );
    
    echo "Array original: " . implode(", ", $palabras) . "<br>";

    $arrayOrdenado = mergeSort($palabras);
    echo "Array ordenado: " . implode(", ", $arrayOrdenado) . "<br>";




?>