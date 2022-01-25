<?php
require_once ('connection.php');

require_once('vendor/autoload.php');

$chatId = \app\ApiController::getChatId(TOKEN);
echo $chatId;
$msg = 'Olá cara, logo mais estarei passando as informações do banco :)';
\app\ApiController::sendMessage($msg);
echo $msg;


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Alert Center</title>
</head>
<body>
    <?php
        echo '<br><a href="consult.php"> Consult </a>';
    ?>
</body>
</html>