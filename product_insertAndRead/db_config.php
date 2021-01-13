<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'product');

/* Attempt to connect to MySQL database
    * Object Oriented System
*/
 $db = new mysqli(HOST, USER, PASS, DB);
 //check connection
if($db->connect_errno){
    echo "Failed to connect to MySQL: " . $db->connect_error;
    exit();
}
?>