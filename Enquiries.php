<DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.php">  
<title>ENQUIRIES</title>
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
  <a href="admin.php">ADMIN LOGIN</a>
  </h2>
  <input type="text" placeholder="Search">
</div>
</div>

<div class="one">

<form action="insert.php" method="post">
<i class="fa fa-paper-plane-o" aria-hidden="true"></i>
<div class="input">
<label for="name">Full Name</label>
<input type="text" placeholder="Enter your name" id="birthname" name="fullName" onkeyup="validateName()">
<span id="name-error"></span>
</div>

<div class="input">
<label for="number">Number</label>
<input type="tel" placeholder="0123 456 789" id="phonenumber" name="number" onkeyup="validateNumber()">
<span id="num-error"></span>
</div>

<div class="input">
<label for="email">Email</label>
<input type="email" placeholder="Enter email" id="emailaddress" name="email" onkeyup="validateEmail()">
<span id="email-error"></span>
</div>

<div class="input">
<label for="enquiry">Enquiry</label> 
<textarea rows="10" placeholder="Enter your enquiry" id="enquirymessage" name="enquiry" onkeyup="validateEnquiry()"></textarea>
<span id="enquiry-error"></span>
</div>

<button onclick="return validateForm()">SUBMIT</button>
<span id="submit-error"></span>
</form>
<button><a href="checkEnquiry.php">CHECK ON ENQUIRY</a></button>
</div>
<script type="text/javascript" src="script.js"></script>
</body>
</html>