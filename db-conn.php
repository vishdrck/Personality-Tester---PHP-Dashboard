<?php
/** 
 * Database credentials. Assuming you are running MySQL
 * server with default setting (user 'root' with no password) 
**/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'db');

/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
?>
$vimasumsoft1997drck$