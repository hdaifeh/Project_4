<?php
require_once 'config.php';

// Get the request data
$postData = json_decode(file_get_contents('php://input'), true);

// Prepare the SQL statement
$sql = "INSERT INTO posts (title, slug, content, thumbnail, author, posted_at) VALUES (:title, :slug, :content, :thumbnail, :author, :posted_at)";

// Prepare the PDO statement
$stmt = $pdo->prepare($sql);

// Bind the parameters
$stmt->bindParam(':title', $postData['title'], PDO::PARAM_STR);
$stmt->bindParam(':slug', $postData['slug'], PDO::PARAM_STR);
$stmt->bindParam(':content', $postData['content'], PDO::PARAM_STR);
$stmt->bindParam(':thumbnail', $postData['thumbnail'], PDO::PARAM_STR);
$stmt->bindParam(':author', $postData['author'], PDO::PARAM_STR);
$stmt->bindParam(':posted_at', $postData['posted_at'], PDO::PARAM_STR);

// Execute the statement
if ($stmt->execute()) {
  // Return a success message
  echo json_encode(array('message' => 'Post created successfully.'));
} else {
  // Return an error message
  echo json_encode(array('message' => 'Error creating post.'));
}

function createPost($request) {
  // Get the request data
  $postData = $request->getParsedBody();

  // Prepare the SQL statement
  $sql = "INSERT INTO posts (title, slug, content, thumbnail, author, posted_at) VALUES (:title, :slug, :content, :thumbnail, :author, :posted_at)";

  // Prepare the PDO statement
  $stmt = $pdo->prepare($sql);

  // Bind the parameters
  $stmt->bindParam(':title', $postData['title'], PDO::PARAM_STR);
  $stmt->bindParam(':slug', $postData['slug'], PDO::PARAM_STR);
  $stmt->bindParam(':content', $postData['content'], PDO::PARAM_STR);
  $stmt->bindParam(':thumbnail', $postData['thumbnail'], PDO::PARAM_STR);
  $stmt->bindParam(':author', $postData['author'], PDO::PARAM_STR);
  $stmt->bindParam(':posted_at', $postData['posted_at'], PDO::PARAM_STR);

  // Execute the statement
  if ($stmt->execute()) {
    // Return a success message
    echo json_encode(array('message' => 'Post created successfully.'));
  } else {
    // Return an error message
    echo json_encode(array('message' => 'Error creating post.'));
  }
}
?>
