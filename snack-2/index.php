<?php 
    // Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
    // che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
    // Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
    
    $_GET['nome'] ?? '';
    $_GET['email'] ?? '';
    $_GET['age'] ?? '';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <form action="./index.php" method="GET">
        <input type="text" name="nome" id="nome">
        <input type="text" name="email" id="email">
        <input type="text" name="age" id="age">
        <button type="submit">Invia</button>
    </form>

    <?php if ($_GET['nome']) ?>
</body>
</html>