<?php
require_once('../db_config.php');

$id = $_GET['idx'];

// mysql query
$sql = "DELETE FROM user_info WHERE  id = '$id' ";

$db_conn-> query($sql);

// page  redirect
 header("Location:../user.php");
?>