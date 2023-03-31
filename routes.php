//*modify my REST API routes to use Doctrine ORM instead of PDO:*//:
<?php
$app->get('/posts', function () use ($entityManager) {
    $repository = $entityManager->getRepository('App\Entity\Post');
    $posts = $repository->findAll();

    $response = array();
    foreach ($posts as $post) {
        $response[] = array(
            'id' => $post->getId(),
            'title' => $post->getTitle(),
            'content' => $post->getContent()
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
});

$app->post('/posts', function (Request $request) use ($entityManager) {
    $data = json_decode($request->getBody(), true);

    $post = new App\Entity\Post();
    $post->setTitle($data['title']);
    $post->setContent($data['content']);

    $entityManager->persist($post);
    $entityManager->flush();

    header('Content-Type: application/json');
    echo json_encode(array(
        'id' => $post->getId(),
        'title' => $post->getTitle(),
        'content' => $post->getContent()
    ));
});

$app->put('/posts/{id}', function (Request $request, $id) use ($entityManager) {
    $data = json_decode($request->getBody(), true);

    $repository = $entityManager->getRepository('App\Entity\Post');
    $post = $repository->find($id);

    if (!$post) {
        throw new Exception('Post not found');
    }

    $post->setTitle($data['title']);
    $post->setContent($data['content']);

    $entityManager->flush();

    header('Content-Type: application/json');
    echo json_encode(array(
        'id' => $post->getId(),
        'title' => $post->getTitle(),
        'content' => $post->getContent()
    ));
});

$app->delete('/posts/{id}', function ($id) use ($entityManager) {
    $repository = $entityManager->getRepository('App\Entity\Post');
    $post = $repository->find($id);

    if (!$post) {
        throw new Exception('Post not found');
    }

    $entityManager->remove($post);
    $entityManager->flush();

    header('Content-Type: application/json');
    echo json_encode(array(
        'message' => 'Post deleted successfully'
    ));
});
