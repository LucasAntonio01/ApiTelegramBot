<!-- <?php

$mensagem = filter_input(INPUT_GET, 'm', FILTER_SANITIZ_STRING);

if ($mensagem) {

    require_once('vendor/autoload.php');

    $chatId = \app\ApiController::getChatId(TOKEN);
    echo $chatId;

    if (!\app\ApiController::sendMessage('Olá, logo mais estarei passando as informações do banco :)')) {
        jsonResponse('Não foi possível enviar a mensagem', -1, 500);
    }

    jsonResponse('Mensagem enviada', 1);

} else {
    jsonResponse('Mensagem não encontrada', -1, 404);
}

function jsonResponse(string $mensagem,int $result, int $httpCode = 200) {
    
    http_response_code($httpCode);
    header('Content-type: aplication/json');

    echo json_encode([
        'msg' => $mensagem,
        'result' => $result
    ]);
}
?> -->