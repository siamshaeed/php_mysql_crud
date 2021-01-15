<?php
require_once("../db_config.php");
 extract($_POST);

$sql = "UPDATE user_info SET username='$name', useremail='$email', phone='$phone' WHERE id='$id' ";

//  $db->query($sql);

 if($db_conn->query($sql)){
     $msg = "Successfully Update";
     header("Location: ../user.php?msg=$msg");
 }
?>