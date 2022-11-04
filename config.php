<?php
$servername ="sql9.freesqldatabase.com";
$username ="sql9541030";
$password ="wrrFDdY8u8";
$dbname ="sql9541030";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//connection check
if ($conn->connect_error) {
	die("Connection failed". $conn->connect_error);
}
