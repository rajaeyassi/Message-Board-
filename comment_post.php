<!-- <?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the post ID and comment content from the form data
    $postID = $_POST['post_id'];
    $body = $_POST['body'];

    // Perform any necessary validation on the form data
    // ...

    // Connect to the database (replace the placeholders with your actual database credentials)
    $dbHost = 'localhost';
    $dbName = 'yassine_';
    $dbUser = 'yassine';
    $dbPass = 'rajae0891';

    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the SQL statement to insert the comment into the database
    $sql = "INSERT INTO comments (post_id, body) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "is", $postID, $body);

    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        // Comment added successfully, redirect back to the post or display a success message
        header("Location: dashbord.php?id=$postID");
        exit();
    } else {
        // Error occurred while adding the comment, display an error message
        echo "Error: " . mysqli_error($conn);
    }

    

    // Close the database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}




?> -->
