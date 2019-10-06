<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techpros";
$varname=$_POST['varname'];
$text=$_POST['texta'];
$name=$_POST['textb'];
$date=date("Y-m-d");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO comm (postid,commentname,comment,date)
VALUES ('$varname','$name','$text','$date')";
if (mysqli_query($conn, $sql)) {
    
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn); 
if ($query_does_not_execute) {
    $errcode = "error_code=003";
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
