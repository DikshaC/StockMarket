<?php
/**
 * Created by PhpStorm.
 * User: dchha
 * Date: 3/20/2019
 * Time: 12:30 PM
 */

//require('db_connection.php')
//use global $connection; in every file

$servername = "localhost";
$username = "diksha";
$password = "diksha";
$dbname = "webpl";

// Create connection
global $connection;

$connection= new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
