<?php 
    include __DIR__ . '/db.php'
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
                <!-- <h3>
                    La media dei suoi voti &grave;: <?php echo foreach($student["media"] as $voto) {
                        $sum += $voto;
                    } ?>
                </h3> -->
            </li>
        <?php } ?>
    </ul>
</body>
</html>