<DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.php">  
<title>RESPOND</title>
</head>
<body>
<div class="heading">
<div class="logo">
<h1>THE SKIN HUB</h1><br>
</div>
<div class="tab">
<h2>
  <a href="home.php">HOME</a>
  <a href="AboutUS.php">ABOUT US</a>
  <a href="admin.php">ADMIN LOGIN</a>
  </h2>
  <input type="text" placeholder="Search">
</div>
</div>

<div class="one">

<form action="config.php" method="post">
<i class="fa fa-paper-plane-o" aria-hidden="true"></i>

<div class="input">
<label for="response">Response</label> 
<textarea rows="10" placeholder="Enter the response" id="responsemessage" name="response"></textarea>
</div>

<button>SUBMIT</button>
</form>
</div>
<script type="text/javascript" src="script.js"></script>
</body>
</html>