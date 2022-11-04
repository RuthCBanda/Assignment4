<?php
include('login.php');

if(isset($_SESSION['login_user'])){
	header("location:EnquiryProgress.php");
}
?>

<DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.php">  
<title>Check Enquiry</title>
</head>
<body>
<div class="heading">
<div class="logo">
<h1>THE SKIN HUB</h1><br>
</div>
<div class="tab">
<h2>
  <a href="index.php">HOME</a>
  <a href="AboutUS.php">ABOUT US</a>
  </h2>
  <input type="text" placeholder="Search">
</div>
</div>

<div class="one" id="login">
<form action="" method="post">
<h1>LOGIN</h1>
<div class="input">
<label>EMAIL</label>
<input type="text" placeholder="EMAIL" id="email" name="email" required >
</div>

<div class="input">
<label>NUMBER</label>
<input type="tel" placeholder="PHONE NUMBER" id="number" name="number" required>
</div>

<input type="submit" name="submit" value="LOGIN">
<span><?php echo $error; ?></span>
</form>
</div>
</body>
</html>