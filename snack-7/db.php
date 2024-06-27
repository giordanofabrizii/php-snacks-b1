<?php 
    // Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    // Questo array dovra' essere inserito in un file separato, da importare.
    // Stampare Nome, Cognome e la media dei voti di ogni alunno.

    $students =[
        [
            "nome"=>"Davide",
            "cognome"=>"Alesci",
            "voti"=>[],
        ],
        [
            "nome"=>"Mirko",
            "cognome"=>"Valle",
            "voti"=>[],
        ],
        [
            "nome"=>"Elisabetta",
            "cognome"=>"Mirti",
            "voti"=>[],
        ],
        [
            "nome"=>"Matteo",
            "cognome"=>"Di Mario",
            "voti"=>[],
        ],
    ];

    foreach($students as $student){
        $voti = [];
        for ($i = 0; $i <= rand(1,7); $i++) {
            array_push($voti, rand(1,10));
        }
        $student["voti"] = $voti;
    }
?>