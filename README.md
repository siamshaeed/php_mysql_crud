## What is CRUD?
<p> CRUD is an acronym for Create, Read, Update, and Delete. CRUD operations are basic data manipulation for database. </p>

## Creating the Config File
<p>After creating the table, we need create a PHP script in order to connect to the MySQL database server. Let's create a file named "config.php" and put the following code inside it.</p>
<p>We'll later include this config file in other pages using the PHP require_once() function.</p>
<pre>
  <?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
</pre>

