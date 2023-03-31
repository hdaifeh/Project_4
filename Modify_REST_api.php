$app->post('/posts', function (Request $request, Response $response, array $args) {
    $data = $request->getParsedBody();

    // Check if user is authenticated
    $token = $request->getHeader('Authorization')[0] ?? null;
    $userId = Auth::validateToken($token);
    if (!$userId) {
        return $response->withStatus(401)->withJson(array('error' => 'Unauthorized'));
    }

    // Create post
    // ...
});
