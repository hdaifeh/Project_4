<?php
require_once 'create_post.php';

// Define the routes
$app->post('/posts', function ($request, $response, $args) {
    // Call the create post function
    createPost($request);
});
?>
