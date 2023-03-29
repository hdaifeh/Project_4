<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App;

$app->post('/upload', function (Request $request, Response $response) {
    $uploadedFiles = $request->getUploadedFiles();
    $uploadedFile = $uploadedFiles['file'];

    if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
        $filename = $uploadedFile->getClientFilename();
        $destination = __DIR__ . '/uploads/' . $filename;
        $uploadedFile->moveTo($destination);

        return $response->withJson(['status' => 'success']);
    }

    return $response->withJson(['status' => 'error']);
});

$app->run();
