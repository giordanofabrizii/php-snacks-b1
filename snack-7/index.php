<?php 
    require_once __DIR__ . '/db.php'
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>
<body>
    <ul>
        <?php foreach($students as $student) { ?>
            <li>
                <h1>
                    <?php echo $student["nome"] . " " . $student["cognome"] ?>
                </h1>
                <h3>
                    La media dei suoi voti &egrave;: <?php
                    $sum = 0;
                    foreach($student["voti"] as $voto) {
                        $sum += $voto;
                    } 
                    echo $media = $sum / count($student["voti"])
                    ?>
                </h3>
            </li>
        <?php } ?>
    </ul>
</body>
</html>