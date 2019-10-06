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

if(!empty($_GET["categories"])){
$categories=$_GET["categories"];

if ($categories=="mobile") {
  $sql = "SELECT * 
FROM  `mypost` 
WHERE  `category` LIKE CONVERT( _utf8 'mobile'
USING latin1 ) 
COLLATE latin1_swedish_ci
LIMIT 0 , 30";
} 
elseif($categories=="Laptops"){
$sql = "SELECT * 
FROM  `mypost` 
WHERE  `category` LIKE CONVERT( _utf8 'Laptops'
USING latin1 ) 
COLLATE latin1_swedish_ci
LIMIT 0 , 30";
}elseif ($categories=="Watches") {
  $sql = "SELECT * 
FROM  `mypost` 
WHERE  `category` LIKE CONVERT( _utf8 'Watches'
USING latin1 ) 
COLLATE latin1_swedish_ci
LIMIT 0 , 30";
}elseif ($categories=="cloths") {
  $sql = "SELECT * 
FROM  `mypost` 
WHERE  `category` LIKE CONVERT( _utf8 'cloths'
USING latin1 ) 
COLLATE latin1_swedish_ci
LIMIT 0 , 30";
}elseif ($categories=="tv") {
  $sql = "SELECT * 
FROM  `mypost` 
WHERE  `category` LIKE CONVERT( _utf8 'tv'
USING latin1 ) 
COLLATE latin1_swedish_ci
LIMIT 0 , 30";
}elseif ($categories=="other") {
  $sql = "SELECT * 
FROM  `mypost` 
WHERE  `category` LIKE CONVERT( _utf8 'other'
USING latin1 ) 
COLLATE latin1_swedish_ci
LIMIT 0 , 30";
}
else {
  # code...
  $sql = "SELECT * FROM mypost ORDER BY postid DESC";
}
}else {
  # code...
  $sql = "SELECT * FROM mypost ORDER BY postid DESC";
}

  if(!empty($_GET['search'])){
  $search = $_GET['search'];
  $sql = "SELECT * FROM mypost WHERE (title LIKE '%$search%') OR (subtitle LIKE '%$search%')";
  $result = $conn->query($sql);
  }else{
    $result = $conn->query($sql);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TechPros | Home</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.css" rel="stylesheet">
  <style type="text/css">
    body {
  background: url('http://i.hizliresim.com/v4Qykv.png') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: 'Roboto', Tahoma, Arial, sans-serif;
  line-height: 1.5;
  font-size: 13px;
}

form {
  outline: 0;
  margin-left: 30%;
  margin-top: 5%;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  -webkit-border-radius: 4px;
  border-radius: 4px;
}

form > .textbox {
  outline: 0;
  height: 42px;
  width: 244px;
  line-height: 42px;
  padding: 0 16px;
  background-color: rgba(255, 255, 255, 0.8);
  color: #212121;
  border: 0;
  float: left;
  -webkit-border-radius: 4px 0 0 4px;
  border-radius: 4px 0 0 4px;
}

form > .textbox:focus {
  outline: 0;
  background-color: #FFF;
}

form > .button {
  outline: 0;
  background: none;
  background-color: rgba(38, 50, 56, 0.8);
  float: left;
  height: 42px;
  width: 42px;
  text-align: center;
  line-height: 42px;
  border: 0;
  color: #FFF;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 16px;
  text-rendering: auto;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-transition: background-color .4s ease;
  transition: background-color .4s ease;
  -webkit-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
}

form > .button:hover {
  background-color: rgba(0, 150, 136, 0.8);
}
  </style>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
    <div class="container">
      <a class="navbar-brand" href="index.php">TechPros</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="compare.php">Compare</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('./img/home-bg.png')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>TechPros Blog</h1>
            <span class="subheading">We help to get deliver better Tech.</span>
            <form method="GET" action="index.php">
            <input name="search" type="text" class="textbox" placeholder="Search">
            <input title="Search" value="" type="submit" class="button">
          </form>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">

          <?php

          if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
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
          
           }
        } else {
                echo "0 results";
                }

          

            ?>                                  
        </div>
        <hr>


        


        
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#" onclick="olderpost.php">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; EkZite Team 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
