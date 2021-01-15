<?php
require_once("../db_config.php");
// The extract() function imports variables into the local symbol table from an array. This function uses array keys as variable names and values as variable values. 
 extract($_POST);
$sql = "UPDATE user_info SET username='$name', useremail='$email', phone='$phone' WHERE id='$id' ";

//  $db->query($sql);

 if($db_conn->query($sql)){
     $msg = "Successfully Update";
     header("Location: ../user.php?msg=$msg");
 }
 ?>
