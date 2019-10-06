<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TechPros | Compare</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.css" rel="stylesheet">
  <link href="css/sticky-footer.css" rel="stylesheet">
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
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
            <a class="nav-link" href="#">Compare</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="margin-top: 90px;background-color: white;"></header>

  <!-- Post Content -->
  <div class="container cta-100 ">
        <div class="container">
          <div class="row blog">
            <div class="col-md-12">
              <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                
                <!-- Carousel items -->
                    <div class="row">
                      <div class="col-md-6">
                        <form>
                        <div class="form-group" style="margin-bottom: 50px; max-width: 450px;">
                        <div class="input-group">
                                  <input type="text" id="search1" class="form-control" placeholder="Search for..." style="padding:25px;height: 53px;border-radius: 30px 0px 0px 30px;">
                                  <span class="input-group-btn">
                                    <button id="button1" class="btn btn-info" type="button" onclick="myFunc()" name="submit1" style="background-color: #002F63;border-color: #002F63;border-radius: 0px 30px 30px 0px;">Go!</button>
                                  </span>
                        </div>
                      </div>
                        </form>
                        <div id="item1" class="item-box-blog" style="max-height:500px;overflow-y: scroll;">
                          <h5>Please Search for products to compare...</h5>
                      </div>
                    </div>
                      <div class="col-md-6">
                        <form>
                        <div class="form-group" style="margin-bottom: 50px; max-width: 450px;">
                        <div class="input-group">
                                  <input type="text" id="search2" class="form-control" placeholder="Search for..." style="padding:25px;height: 53px;border-radius: 30px 0px 0px 30px;">
                                  <span class="input-group-btn">
                                    <button id="button2" class="btn btn-info" type="button" onclick="myFunc1()" name="submit2" style="background-color: #002F63;border-color: #002F63;border-radius: 0px 30px 30px 0px;">Go!</button>
                                  </span>
                        </div>
                      </div>
                        </form>
                        <div id="item2" class="item-box-blog" style="max-height:500px;overflow-y: scroll;">
                          <h5>Please Search for products to compare...</h5>
                      </div>
                      </div>
                    </div>
                    <!--.row-->
                  </div>
              <!--.Carousel-->
            </div>
          </div>
        </div>
      </div>

  <!-- Footer -->
  <footer class="footer">
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
  <script type="text/javascript">
    

    function myFunc(){
    $(document).ready(function(){
      var a = "comp.php?search=" + document.getElementById("search1").value;
      $("#item1").load(a);
    });
    }
    function myFunc1(){
    $(document).ready(function(){
      var b = "comp.php?search=" + document.getElementById("search2").value;
      $("#item2").load(b);
    });
    }
    var postid;
    function myFunc3(postid){
      $(document).ready(function(){
       var b = "post2.php?id=" + postid;
      postid = "#"+postid;
      $(postid).load(b);
    });
    }
  </script>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
