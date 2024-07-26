<?php
session_start();

// Connect to the database
$conn = new mysqli('localhost', 'yassine', 'rajae0891', 'yassine_');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect the user to the login page
    
    header("Location: login.php");
    exit;
}

    // Get the user_id from the session
// Check if the post form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    

    // Prepare a SQL statement to insert the post into the database
    $stmt = $conn->prepare("INSERT INTO posts (title, body, user_id, post_image_url, created_at) VALUES (?, ?,?, ?, NOW())");
    


$title = $_POST['title'];
$body = $_POST['body'];
$username = $_SESSION['username'];
$post_image_url = $_POST['post_image_url'];

// Get the user_id associated with the username
$stmt_user = $conn->prepare("SELECT id FROM users WHERE username = ?");
$stmt_user->bind_param("s", $username);
$stmt_user->execute();
$stmt_user->bind_result($user_id);
$stmt_user->fetch();
$stmt_user->close();

    $stmt->bind_param("ssis", $title, $body, $userId, $post_image_url);

    
    // Execute the SQL statement
    if ($stmt->execute()) {

        
        echo "Post created successfully.";
        header("Location: dashbord.php");

    } else {
        echo "Error creating post: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();

}
?>
