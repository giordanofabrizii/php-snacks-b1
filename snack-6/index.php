<?php 
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
]; 
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="insegnanti">
        <?php foreach($db['teachers'] as $teacher) { ?>
            <h1> <?php echo $teacher['name'] . ' ' . $teacher['lastname'] ?> </h1>
        <?php } ?>
    </div>
    <div class="pm">
    <?php foreach($db['pm'] as $teacher) { ?>
            <h1> <?php echo $teacher['name'] . ' ' . $teacher['lastname'] ?> </h1>
        <?php } ?>
    </div>
</body>
</html>