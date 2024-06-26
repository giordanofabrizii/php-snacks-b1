<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php 
    $partite = [
        [
            "squadra1" => "Warriors",
            "squadra2" => "Lakers",
            "punteggio" => rand(1,100) .'-' . rand(1,100),
        ],
        [
            "squadra1" => "Clippers",
            "squadra2" => "Hawks",
            "punteggio" => rand(1,100) .'-' . rand(1,100),
        ],
        [
            "squadra1" => "Celtics",
            "squadra2" => "Heat",
            "punteggio" => rand(1,100) .'-' . rand(1,100),
        ],
        [
            "squadra1" => "Maveriks",
            "squadra2" => "Bucks",
            "punteggio" => rand(1,100) .'-' . rand(1,100),
        ],
    ];

    foreach($partite as &$partita) {
        echo '<p>' . $partita['squadra1'] . ' - ' . $partita['squadra2'] . ' | ' . $partita['punteggio'] . '</p>';
    }

?>