<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url('cup1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        /* .comments-container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
        } */


        .comments-container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px; 
            max-width: 900px; 
             margin: 0 auto;
        }


        .comment {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="comments-container">
        <?php
        session_start();

        $dbHost = 'localhost';
        $dbName = 'yassine_';
        $dbUser = 'yassine';
        $dbPass = 'rajae0891';

        $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if (isset($_POST['post_id'])) {
            $post_id = $_POST['post_id'];

            $sql = "SELECT body FROM comments WHERE post_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $post_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $commentBody = $row['body'];
                    echo "<div class='comment'>" . $commentBody . "</div>";
                }
            } else {
                echo "No comments found for this post.";
            }
        } else {
            echo "Invalid post ID.";
        }

        mysqli_close($conn);
        ?>
            <button onclick="window.location.href = 'dashbord.php';">Go Back to Dashboard</button>


    </div>

</body>
</html>
