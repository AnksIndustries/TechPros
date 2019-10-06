


<?php


$title=$_POST['title'];
$subtitle=$_POST['subtitle'];
$writtenby=$_POST['writtenby'];
$date=date("Y-m-d");
$categories=$_POST['categories'];
$url=$_POST['url'];
if (!empty($title)) {
   # code...

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techpros";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      echo $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("txt","tpp");
         $fff=explode(".", $file_name);

      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a txt file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"C:/wamp/www/techpro/uploads/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }


    if(isset($_FILES['images'])){
      $errors= array();
      $file_name = $_FILES['images']['name'];
      $file_size = $_FILES['images']['size'];
      $file_tmp = $_FILES['images']['tmp_name'];
      echo $_FILES['images']['tmp_name'];
      $file_type = $_FILES['images']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['images']['name'])));
      
      $extensions= array("jpg");
         $ffff=explode(".", $file_name);

      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a txt file.";
      }
      
      if($file_size > 16777216) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"C:/wamp/www/techpro/uploadimg/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
if (!empty($title)) {
   if (!empty($subtitle)) {
      if (!empty($fff[0])) {
         if (!empty($ffff[0])) {
            if (!empty($writtenby)) {
               
                  $sql = "INSERT INTO mypost (title,subtitle,filename,imagename, writtenby, date,category,url)
VALUES ('$title','$subtitle','$fff[0]','$ffff[0]','$writtenby','$date','$categories','$url')";

               
            }
         }
      }
   }
}
if (mysqli_query($conn, $sql)) {
    
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn); 
}
else{
   echo "title must be there";
}
$referer = $_SERVER['HTTP_REFERER'];

if ($errcode) {
    if (strpos($referer, '?') === false) {
        $referer .= "?";
    }

    header("Location: $referer&$errcode");
} else {
    header("Location: $referer");
}
exit;

?>


