<?php 
	$servername = "localhost";
  	$username = "root";
  	$password = "";
  	$dbname = "techpros";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$search=$_GET['search'];

	$sql = "SELECT * FROM mypost WHERE (title LIKE '%$search%') OR (subtitle LIKE '%$search%')";

	$result = $conn->query($sql);


          if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
        	$postID = $row['postid'];
        	echo "<div id = '$postID' style='margin-bottom:5%;'>";
        	echo "<a href='post1.php? id=".$row["postid"]."'>";
            echo "<h2 class='post-title'>";
            echo $row["title"];
            echo "</h2>";
            echo "<h3 class='post-subtitle'>";
            echo $row["subtitle"];              
            echo "</h3>";
          	echo "</a>";
          	echo "<p class='post-meta'>Posted by";                                
            echo "<a href='#'>".$row["writtenby"]."</a>";
            echo $row["date"]."</p> ";
            echo "<button type='button' class='btn btn-info' onclick='myFunc3($postID)' style='border-radius:50px;'>Compare</button><p>$postID</p>";
            echo "</div>";
           }
        } else {
                echo "0 results";
                }

 ?>