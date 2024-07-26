<?php
// Start a session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not, redirect to the login page
    header("Location: login.php");
    exit;
}




?>





<!DOCTYPE html>
<html>
<head>
	<title>Message Board Dashboard</title>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1   {color: darkred;} 

h2   {color: red;}

h2 {
    border-bottom: 10px solid #000;
    padding: 10px;
    
  }

.post-image {
  max-width: 900px;
  max-height: 800px;
  margin-left: 30px;



}

.title-wrapper {
	background: rgb(62, 6, 6);
    padding: 10px;
}
      
.title {
    color: white;
    text-align: center;
}
.centered-title {
  margin-left: 60px;

}

.merged-title {
    color: #4CAF50;
    display: inline;
    text-decoration: underline;
    font-size: 50px;



}


.menu {
	float: left;
	width: 20%;
	background-color: lightgray;
	height: 100%;
	padding: 20px;
	border-bottom-left-radius: 10px;
}
.content {
	float: left;
	width: 80%;
	padding: 20px;
	border-bottom-right-radius: 10px;
}
.clear {
	clear: both;
}

.menu-icon {
  cursor: pointer;
}

.menu-icon span {
  display: block;
  width: 30px;
  height: 3px;
  background-color: #000;
  margin-bottom: 5px;
}

.menu-icon span:last-child {
  margin-bottom: 0;
}


li {
  margin-right: 20px;
}



body {
  /* margin: 0; */
  font-family: Arial, Helvetica, sans-serif;
  background-color: lightgray;
  
 

}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: rgb(32, 16, 16);
  color: white;
}



.dropdown {
  position: absolute;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
  display: block;
}

.btn:hover, .dropdown:hover .btn {
  background-color: #0b7dda;
}



.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  /* background-color: #f1f1f1; */
    background-color: black;


}


.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  /* background-color: #ddd; */
  background-color: #45a049;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
  border-radius: 5px;
  padding: 20px;
}


.flag-icon {
  width: 32px; /* Adjust the width as per your requirement */
  height: 32px; /* Adjust the height as per your requirement */
  border-radius: 50%; /* Creates a circular shape */
  margin: 5px; /* Adds spacing between icons */
}

.profile-icon {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-left: 50px;


}

.country-name {
  margin-top: 5px;
  font-weight: bold;
}

.flag-wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 10px;
  cursor: pointer;
}
.form-group {
    margin-bottom: 10px;
}

.post-container {
        border: 5px solid rgb(62, 6, 6);
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 10px;
        /* border-left: 5px solid #4CAF50; */

}

.fa {
  padding: 8px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  /* margin: 5px 2px; */
  /* margin-left: 100px; */

}

.fa:hover {
    opacity: 0.5;

}

.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
}

.social-bar {
    text-align: right;
  }

  .social-bar .fa {
    margin-left: 10px;
  }
  .fa-youtube {
  background: #bb0000;
  color: white;
}





.like-button {
    display: inline-block;
    background-color: #f2f2f2;
    padding: 10px;
    border-radius: 4px;
  }
  .logo {
    position: absolute;
    top: 8px;
    right: 10px;
}

.logo img {
    width: 80px;
    height: auto; 
}

    /* .centered-title {
        text-align: center;
    } */
    
    button {
  background-color: #4CAF50;
  color: #fff;
  padding: 8px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 30px;
  /* margin-left: 90px; */


}

button:hover {
  background-color: #45a049;
}
textarea {
  width: 50%;
  height: 80px;
  resize: vertical;
  /* margin-bottom: 5px; */
  margin-left: 30px;

}
.likes {
        display: inline-block;
        background-color: #f2f2f2;
        border-radius: 4px;
        padding: 6px 10px;
        font-size: 14px;
        color: #333;
        
    } 
.button-container form {
  display: inline;

}

.centered-title {
  text-align: left;
  
}

.merged-title {
  font-size: 24px;
  font-weight: bold;
  color:#bb0000;
  margin-left: 70px;
  font-family: Arial, Helvetica, sans-serif;
}

       

</style>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script> 


<div class="title-wrapper">
  <h1 class="title">Welcome to the Message Board</h1>
 </div>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Home')">Home</button>
  <button class="tablinks" onclick="openCity(event, 'News')">News</button>

  <button class="tablinks" onclick="openCity(event, 'Teams')">Teams</button>
  <button class="tablinks" onclick="openCity(event, 'New Post')">New Post</button>
  <button class="tablinks" onclick="openCity(event, 'About')">About</button>
  <button class="tablinks" onclick="openCity(event, 'Contact')">Contact</button>
  <button class="tablinks" onclick="openCity(event, 'Support')">Support</button>
  <button class="tablinks" onclick="logout()">Logout</button>

  <div class="social-bar">
<!-- Add font awesome icons -->
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-youtube"></a>
  <a href="#" class="fa fa-instagram"></a>
  </div>
</div>



<div class="logo">
    <img src="cup.jpg" alt="Logo">
</div>
<!-- <div class="logo">
    <img src="logo.png" alt="Logo">
</div> -->


<script>
    function logout() {
      window.location.href = "login.php";
    }
</script>

<div id="Home" class="tabcontent">
  <p>    </p>
</div>
<div id="Contact" class="tabcontent">
  <h4>Email: </h4>
  <p>
    <a href="mailto:Latifa.idhamou@example.com">Latifa.idhamou@example.com</a> /
    <a href="mailto:Raja.yassine@example.com">Raja.yassine@example.com</a>
  </p>
  
  <h4>Phone: </h4>
  <p><a href="tel:123456782">123-456-782</a></p>
</div>

<div id="About" class="tabcontent">
  <p>
    <a href="https://en.wikipedia.org/wiki/2022_FIFA_World_Cup" target="_blank">https://en.wikipedia.org/wiki/2022_FIFA_World_Cup</a><br>
    <a href="https://www.fifa.com/fifaplus/en/tournaments/mens/worldcup/qatar2022" target="_blank">https://www.fifa.com/fifaplus/en/tournaments/mens/worldcup/qatar2022</a>
  </p>
</div>



<div id="Teams" class="tabcontent">
  <h3>Flags</h3>
		   <img src="http://www.pngall.com/wp-content/uploads/2016/05/Morocco-Flag.png"class="flag-icon">
			<img src="https://static.vecteezy.com/system/resources/previews/000/408/780/original/illustration-of-france-flag-vector.jpg"class="flag-icon">
			<img src="http://wallpapercave.com/wp/itYcVwJ.png"class="flag-icon">
			<img src="http://upload.wikimedia.org/wikipedia/commons/e/ec/Unofficial_Croatian_Flag_(1990).png"class="flag-icon">
			<img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/05/Flag_of_Brazil.svg/1200px-Flag_of_Brazil.svg.png"class="flag-icon">
			<img src="http://terrifictop10.files.wordpress.com/2013/02/portugal-flag.gif"class="flag-icon">
			<img src="https://tse2.mm.bing.net/th?id=OIP.PEQR7o_EreEGNRtXrS9igwHaFL&pid=Api&P=0"class="flag-icon">
			<img src="http://2.bp.blogspot.com/-yu13dC0TPks/UM99__eV4vI/AAAAAAAAAtg/zgHoZmxObwI/s1600/netherlands-flag11.jpgg"class="flag-icon"> 
			<img src="https://ontarioflagandpole.com/wp-content/uploads/2017/10/switzerland_texture.gif"class="flag-icon">
			<img src="https://wallpapercave.com/wp/wp3996103.jpg"class="flag-icon">
			<img src="https://tse3.mm.bing.net/th?id=OIP.5WZrOzquLZBOS_hDgJLmKgHaE8&pid=Api&P=0"class="flag-icon">
			<img src="https://cdn.theculturetrip.com/wp-content/uploads/2017/02/flag_of_south_korea-svg_.png"class="flag-icon">
			<img src="https://wallpapercave.com/wp/wp2175488.png"class="flag-icon">
			<img src="https://tse1.mm.bing.net/th?id=OIP.negtMnvm6KcK8VhtCm3MzQHaD_&pid=Api&P=0"class="flag-icon">
			<img src="https://tse4.mm.bing.net/th?id=OIP.A3_u3RCYCp_89iAm6ceN5gHaE8&pid=Api&P=0"class="flag-icon">
			<img src="https://tse4.mm.bing.net/th?id=OIP.UqbEJIQFdAdk9AX1rbu49AHaE8&pid=Api&P=0"class="flag-icon">
			<img src="https://tse4.mm.bing.net/th?id=OIP.ID9MM3o6hMEF0H4n4TK82gHaE7&pid=Api&P=0"class="flag-icon">
			<img src="https://static.vecteezy.com/system/resources/previews/001/176/879/original/canada-flag-background-vector.jpg"class="flag-icon">
			<img src="https://tse2.mm.bing.net/th?id=OIP.BzdinDl8hsG7OSBmoGujGgHaEO&pid=Api&P=0"class="flag-icon">
			<img src="http://flagpedia.net/data/flags/ultra/tn.png"class="flag-icon">
			<img src="https://tse4.mm.bing.net/th?id=OIP.ZunnNvqNEh2MrAnUrhHlzwHaFm&pid=Api&P=0"class="flag-icon">
			<img src="https://pixelz.cc/wp-content/uploads/2018/11/ecuador-flag-uhd-4k-wallpaper.jpg"class="flag-icon">
			<img src="http://2.bp.blogspot.com/_M0tDVxRSdxo/S6vpJHk0s5I/AAAAAAAAAOM/bwmYgTUqF18/s1600/Ghana+Flag.jpg"class="flag-icon">
			<img src="https://www.worldatlas.com/upload/63/3f/7a/untitled-design-281.jpg"class="flag-icon">
			<img src="https://wonderfulengineering.com/wp-content/uploads/2015/08/Cameroon-Flag-2.jpg"class="flag-icon">
			<img src="https://tse1.mm.bing.net/th?id=OIP.fJ9tiya5GzT4c_YjIbT4lgHaFB&pid=Api&P=0"class="flag-icon">
			<img src="https://tse3.mm.bing.net/th?id=OIP.monVq8uVp6siYWWW0r7pzQHaEZ&pid=Api&P=0"class="flag-icon">
			<img src="https://wallpapercave.com/wp/wp2359238.png"class="flag-icon">
			<img src="https://www.worldatlas.com/upload/b8/06/53/shutterstock-117703582.jpg"class="flag-icon">
			<img src="https://wallpapercave.com/wp/wp4215920.jpg"class="flag-icon">


</div>


<div id="New Post" class="tabcontent">
  <!-- <h3>Create New Post</h3> -->
  <h2>Create a new post:</h2>
		<form action="dashbord.php" method="post">
			<label for="title">Title:</label>
			<input type="text" name="title" id="title" placeholder="Title of the post" required><br><br>
      <label for="body">Body:</label><br>
			<textarea name="body" id="body" placeholder="Write something...." style="height:200px" required></textarea><br><br>
      <label>Post Image</label>  
      <input type="text" name="post_image_url" id="post_image_url" placeholder="Enter image URL">
             <!-- <input type="file" name="post_image_url"> <br>  -->

      <button type="submit" name="create_post" formaction="create_post.php">Create Post</button>


		</form>
</div>

<div style="display: flex; flex-direction: column; align-items: center;">
  <h2 style="text-align: center;">World Cup Qatar 2022</h2>

  <div style="display: flex; justify-content: center;">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/kY8UxDMJtpM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
  
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
    $('#view-comments-link').click(function(e) {
        e.preventDefault(); 

        $.ajax({
            url: 'get_comments.php', 
            type: 'GET',
            dataType: 'html',
            success: function(response) {
                
                $('.comments').html(response);
            },
            error: function() {
                alert('Error occurred while retrieving comments.');
            }
        });
    });
});
   </script>
    
</script>

	 
<h2>Recent Posts:</h2>
<ul>
		
<?php

// Connect to the database
$conn = new mysqli('localhost', 'yassine', 'rajae0891', 'yassine_');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function countLikes($postId) {
  global $conn; // Add this line to access the database connection within the function

  // Prepare a SQL statement to select the count of likes for a post
  $stmt = $conn->prepare("SELECT COUNT(*) AS likes FROM post_likes WHERE post_id = ?");
  $stmt->bind_param("i", $postId);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  $stmt->close();

  return $row['likes'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the 'post_id' key exists in the $_POST array
    if (isset($_POST['post_id'])) {
        $postId = $_POST['post_id'];

        // Prepare the SQL statement to update the post likes
        $stmt = $conn->prepare("UPDATE posts SET likes = likes + 1 WHERE id = ?");
        $stmt->bind_param('i', $postId);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Like successful!";
        } else {
            echo "No post found with the specified ID.";
        }

        $stmt->close();
    } else {
        echo "No post ID provided.";
    }
}





$stmt = $conn->prepare("SELECT p.id, p.title, p.body, p.created_at, p.profile_image_url, p.post_image_url, p.likes, COUNT(c.id) AS comment_count FROM posts p LEFT JOIN comments c ON c.post_id = p.id GROUP BY p.id ORDER BY p.created_at DESC LIMIT 8");

// Execute the SQL statement
$stmt->execute();

// Fetch the result of the SQL statement
$result = $stmt->get_result();

?>
<?php

if ($result->num_rows > 0)
{
  while ($row = $result->fetch_assoc()) {
      
    echo "<div class='post-container'>";

      echo "<div class='centered-title'><h3 class='merged-title'>" . $row['title'] . "</h3></div>";
       echo "<div class='post-profile'>";
          if (!empty($row['profile_image_url'])) {
                echo "<p><img src='" . $row['profile_image_url'] . "' alt='Profile Icon' class='profile-icon'>" . $row['body'] . "</p>";
          } else {
                // Display default profile image
                  echo "<p><img src='default.png' alt='Default Profile Icon' class='profile-icon'>" . $row['body'] . "</p>";
            }

            echo "<p style='text-align: left; margin-left: 50px;'>Created at: " . $row['created_at'] . "</p>";

          if ($row['post_image_url']) {
              echo '<img src="' . $row['post_image_url'] . '" alt="Post Image" class="post-image">';
              echo "<br>";
              // echo "</div>";
           }
          

           


      echo "<div class='button-container'>";


          echo "<form action='comment_post.php' method='post'>";
              echo "<input type='hidden' name='post_id' value='" . $row['id'] . "'>";
              echo "<textarea name='body' placeholder='Add a comment'></textarea>\n";
              echo "<br>";
              echo "<button type='submit'>Comment</button>";
          echo "</form>";


          echo "<form action='like.php' method='post'>";
             echo "<input type='hidden' name='id' value='".$row['id']."'>";
             echo "<button type='submit' name='like'>Like</button>";
             echo "<span class='likes'>" . $row['likes'] . "</span> ";
          echo "</form>";
      
          // Display the comment count and provide the view comments button
          echo "<form action='get_comments.php' method='post'>";
              echo "<input type='hidden' name='post_id' value='" . $row['id'] . "'>";
               echo "<button type='submit' name='view_comments'>View Comments</button>";
               echo "<span class='likes'>" . $row['comment_count'] . "</span> ";

          echo "</form>";
  

        echo "</div>";    
      echo "</div>";
     echo "</div>";
    echo "</div>";



  }  
   
}


echo "</ul>";

$stmt->close();
mysqli_close($conn);

?>

          </body>
          </html>
            