<?php
// This code for data insert on database
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    extract ($_POST);
    require_once ('../db_config.php');
    $sql = "INSERT INTO  user_info (username, useremail, phone) values ('$name', '$email', '$phone')";

   $db_conn->query($sql);

   //This section for page redirection
   if($db_conn -> affected_rows > 0){
    header("Location: ../user.php");
  }
}
?>
