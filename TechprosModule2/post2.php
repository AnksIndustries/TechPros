<?php
$post_id=$_GET["id"];
$servername1 = "localhost";
$username1 = "root";
$password1 = "";
$dbname1 = "techpros";

// Create connection
$conn1 = new mysqli($servername1, $username1, $password1, $dbname1);
// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
} 
$sql1 = "SELECT * FROM `mypost` WHERE postid=".$post_id;
      $resulttt1 = $conn1->query($sql1);
      $row1 = $resulttt1->fetch_assoc();

      echo "<h1 class='mt-4'>";echo $row1['title'];echo "</h1>";
      echo "<hr>";
      echo "<p>";echo $row1['date'];echo "</p>";
      echo "<hr>";
     
      $ff=$row1["imagename"];  
      $fill="./uploadimg/";
      $ext=".jpg";
      $newfile=$fill.$ff.$ext;

      echo "<img class='img-fluid rounded' src='".$newfile."' alt='nothing' height='250px' width='250px'>";
      echo "<hr>";
      $Url=$row1['url'];
      echo "<button type='button' class='btn btn-success' style='border-radius:50px;'><a href='$Url' style='color:white;'>BUY</a></button><p>$Url</p>";
      echo "<p class='lead'>";
        $ff=$row1["filename"];
      
      $fil="./uploads/";
      $ext=".txt";
      $newfile=$fil.$ff.$ext;

      if ($fh = fopen($newfile, 'r')) {
    while (!feof($fh)) {
        $line = fgets($fh);
        echo $line;
        echo "<br>";
    }
    fclose($fh);
     } 
       echo "</p>";
?>