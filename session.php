<?php
$conn = mysqli_connect("sql9.freesqldatabase.com", "sql9541030", "wrrFDdY8u8", "sql9541030");
session_start();

$user_check = $_SESSION['login_user'];

$query = "SELECT email from customerenquiries where email = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['email'];
?>