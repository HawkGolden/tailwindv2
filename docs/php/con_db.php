<?php
$servername = "localhost:3307";
$username = "root";
$password = "123456";
$dbname = "landing";
require_once("/opt/lampp/htdocs/tailwindv2/php/con_db.php");
$conex = new mysqli($servername, $username, $password, $dbname);
?>
