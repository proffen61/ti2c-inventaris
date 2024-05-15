<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'pendaftaran_inventory');

// Create a new database connection
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check the connection
if (!$db) {
    die('Connection failed: '. mysqli_connect_error());
}
?>