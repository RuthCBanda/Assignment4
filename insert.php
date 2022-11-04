<?php
  include("config.php");
   session_start();

$fullName = $_POST['fullName'];
$number = $_POST['number'];
$email = $_POST['email'];
$enquiry = $_POST['enquiry'];

if (!empty($fullName) || !empty($number) || !empty($email) || !empty($enquiry)) {
  $host = "sql9.freesqldatabase.com";
  $dbUsername = "sql9541030";
  $dbPassword = "wrrFDdY8u8";
  $dbname = "sql9541030";

  //connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
  } else{
    $SELECT = "SELECT email From customerenquiries Where email= ? Limit 1";
    $INSERT = "INSERT Into customerenquiries (fullName, number, email, enquiry) values(?,?,?,?)";

    //prepare statement
$stmt = $conn->prepare($SELECT);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($email);
$stmt->store_result();
$rnum = $stmt->num_rows;

if ($rnum==0) {
  $stmt->close();

  $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("siss", $fullName, $number, $email, $enquiry);
    $stmt->execute();
    echo "Enquiry sent successfully! Thank you for getting in touch with us.";
} else{
  echo "An enquiry has already been sent!";
  }
  $stmt->close();
  $conn->close();
}
}
 else
echo "Please fill in missing fields!";
die()

?>