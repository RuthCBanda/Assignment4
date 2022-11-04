<?php
include('session.php');

if(isset($_SESSION['login_user'])){
	header("location:checkEnquiry.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>ENQUIRY PROGRESS</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.php"> 
<style>

 table th, td {
	
  border: 1px solid purple;
  border-radius: 10px;
  padding:40px;}
  
  table button{
	background:purple;
	color:pink;
	border-radius: 4px;
	border: 1px solid pink;
	padding: 10px 40px;
	outline: 0;
	cursor:pointer;
	display:block;
	margin: 30px auto 10px;
}

table h2{
	color:tan;
	font-size:15px;
}
</style> 
</head>
<body style="background-color: pink;">
<div class="heading">
<div class="logo">
<h1 style="color:pink;">THE SKIN HUB</h1><br>
</div>
<div class="tab">
<h2>
  <a href="home.php">HOME</a>
  <a href="AboutUS.php">ABOUT US</a>
  </h2>
  <input type="text" placeholder="Search">
</div>
</div>

<div class="one">
<table>
<tr>
<th>FullNAME</th>
<th>Phone Number</th>
<th>Email</th>
<th>Enquiry</th>
<th>Response</th>
</tr>
<?php
$conn = mysqli_connect("sql9.freesqldatabase.com", "sql9541030", "wrrFDdY8u8", "sql9541030");
if($conn-> connect_error){
	die("Connection failed:" .$conn-> connect_error);
}

$sql = "SELECT fullName, number, email, enquiry, response from customerenquiries";
$result = $conn-> query($sql);

if($result-> num_rows>0){
	while($row = $result-> fetch_assoc()){
		echo "<tr>
		<td>$row[fullName]</td>
		<td>$row[number]</td>
		<td>$row[email]</td>
		<td>$row[enquiry]</td>
		<td>$row[response]</td>
		</tr>
		";
		}
		echo "</table>";
}
else{
	echo "No enquiries";
}

$conn-> close();
?>
</table>
</div>
</body>
</html>