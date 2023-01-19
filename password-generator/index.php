<?php

$app = new \Slim\App;
$app->add(new \Slim\Middleware\ContentTypes());

$app->post('/generate', function ($request, $response) {
    $length = $request->getParam('length');
    $count = $request->getParam('count');
    $passwords = generatePasswords($length, $count);
    return $response->withJson($passwords);
});

function generatePasswords($length, $count) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $passwords = array();
    for ($i = 0; $i < $count; $i++) {
        $password = '';
        for ($j = 0; $j < $length; $j++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }
        $passwords[] = $password;
    }
    return $passwords;
}
