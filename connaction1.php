<?php echo "Database Connection way : 2 </br>"?>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "crudsample";
//Connection with mysql server
$conn = mysqli_connect($host, $user, $pass, $database) or die ("Something wrong. Please connet with your Server Administrator");

//chack connection
if($conn){
 echo "Connection Success";
}else{
    echo"Connection Problem";
}

?>
