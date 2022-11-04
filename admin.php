<DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.php">  
<title>ADMIN LOGIN</title>
<script>
function myFunction()
{
	var un = document.forms["myForm"]["uName"].value;
	var pw = document.forms["myForm"]["pWord"].value;
	if(un=="admin" && pw=="ADMIN"){
		window.location.href="results.php";
	}
	else{
		alert("Invalid username or password");
	}
}
</script>
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

<div class="one">
<form name="myForm" method="post">
<h1>LOGIN</h1>
<div class="input">
<label for="userName">Username</label>
<input type="text" placeholder="USERNAME" id="uname" name="uName" required >
</div>

<div class="input">
<label for="password">Password</label>
<input type="password" placeholder="PASSWORD" id="pword" name="pWord" required>
</div>

<input type="button" name="loginbtn" id="logbtn" value="Login" onclick="myFunction()">
</form>
</div>

</body>

</html>