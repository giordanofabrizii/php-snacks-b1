<?php 
    // Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

    $numbers = [];

    while (count($numbers) < 15) {
        $num = rand(1,100);

        if (in_array($num, $numbers)) {
            $num = rand(1,100);
        };

        array_push($numbers, $num);
    };

    foreach($numbers as $number) {
        echo $number . '<br>';
    }

    echo "<p>L'array ha " . count($numbers) . " caratteri tutti diversi</p>"
?>