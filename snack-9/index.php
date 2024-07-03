<?php  

require_once __DIR__ . '/classes/Utente.php';
require_once __DIR__ . '/classes/PremiumUser.php';
require_once __DIR__ . '/classes/Membership.php';

$user = new Utente('gino','ginetto','userGina','gino@gina.com');
$premiumUser = new premiumUser('gino','ginetto','userGina','gino@gina.com','3 coin',new Membership ('84B1893B', '4 months'));

var_dump($user, $premiumUser);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 9</title>
</head>
<body>
    
</body>
</html>