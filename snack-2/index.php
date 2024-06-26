<?php 
    // Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
    // che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
    // Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

    $name = isset($_GET['nome'])? $_GET['nome'] : '';
    $email = isset($_GET['email'])? $_GET['email'] : '';
    $age = isset($_GET['age'])? $_GET['age'] : '';
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

    <?php if (strlen($name) >=3 && str_contains($email, '.') && str_contains($email, '@') && is_numeric($age)) {
            echo '<h1> Accesso riuscito </h1>' ;
        } else {
            echo '<h1> Accesso negato </h1>' ;
        }
    ?>
</body>
</html>