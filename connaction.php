<!-- <?php echo "Database Connection way : 1" ?> -->

<?php
ini_set("display_error", 0);

//create constant 
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "crudsample");

//connection with mysql server. (Here mysqli() Function Object Oriented connection style)
$db = new mysqli(HOST, USER, PASS, DB);

//chack connection
if ($db->connect_errno) {
    echo "Failed to connect to MySql :" . $db->connect_error;
    exit();
}
?>