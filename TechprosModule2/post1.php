<?php
$post_id=$_GET["id"];
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
$sql = "SELECT * FROM `mypost` WHERE postid=".$post_id;
      $resulttt = $conn->query($sql);
      $row = $resulttt->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TechPros | <?php echo $row["title"];?></title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">
  <link href="css/clean-blog.css" rel="stylesheet">

  <style type="text/css">


form {
  outline: 0;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  -webkit-border-radius: 4px;
  border-radius: 4px;
}

form > .textbox {
  outline: 1px solid lightgrey;
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
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Compare.php">Compare</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"><?php echo $row["title"];?> <!-- PHP code for post title from DB --></h1>

        <!-- Author -->
        <p class="lead">
          by
          
          <?php echo "<a href='index.php? categories=".$row["category"]."'>";?><?php echo $row["category"];?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p><?php echo $row["date"];?> <!-- PHP code for post date from DB --></p>

        <hr>

        <!-- Preview Image -->
        <?php
        $ff=$row["imagename"];
      
      
      $fill="./uploadimg/";
      $ext=".jpg";
      $newfile=$fill.$ff.$ext;

      
      
       
          ?>
        <img class="img-fluid rounded" src="<?php echo $newfile;?>" alt="nothing"> <!-- PHP code for post image from DB -->

        <hr>
      <button class="btn btn-primary" onclick="<?php echo "window.location.href ='".$row['url']."';"; ?>">Buy</button>
      

        <!-- Post Content --><?php
        echo "<p class='lead'>";
        $ff=$row["filename"];
      
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

        

        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form method="POST" action="comment.php">
              <div class="form-group">
                <input class="form-control" type="textarea" name="textb" placeholder="name">
                <textarea class="form-control" rows="3" name="texta" placeholder="comment"></textarea>
                <input type="hidden" name="varname" value="<?php echo $row['postid'];?>">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
<?php $sqll = "SELECT * FROM `comm` WHERE postid=".$row['postid'];
$resulttt = $conn->query($sqll);
if ($resulttt->num_rows > 0) {
    // output data of each row
    while($rows = $resulttt->fetch_assoc()) {
      echo "<div class='media mb-4'>";
        echo "<img class='d-flex mr-3 rounded-circle' src='http://placehold.it/50x50' alt=''>";
          echo "<div class='media-body'>";
            echo "<h5 class='mt-0'>".$rows['commentname']."</h5>";
            echo $rows['comment'];
         echo "</div>";
        echo "</div>";

    }}?>
        <!-- Single Comment -->
        
        
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <form method="GET" action="index.php">
            <input name="search" type="text" class="textbox" placeholder="Search">
            <input title="Search" value="" type="submit" class="button">
          </form>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="index.php? categories=mobile">Mobile Phones</a>
                  </li>
                  <li>
                    <a href="index.php? categories=Laptops">Laptops</a>
                  </li>
                  <li>
                    <a href="index.php? categories=Watches">Watches</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="index.php? categories=cloths">cloths</a>
                  </li>
                  <li>
                    <a href="index.php? categories=tv">TV</a>
                  </li>
                  <li>
                    <a href="index.php? categories=other">Other</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; EkZite Team 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
