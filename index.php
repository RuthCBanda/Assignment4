<!DOCTYPE>
<html>
<head>
<title>THE SKIN HUB</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.php">  
</head>


<body>
<div class="heading">
<div class="logo">
<h1>THE SKIN HUB</h1><br>
</div>
<div class="tab">
<h2>
  <a href="#home">HOME</a>
  <a href="AboutUS.php">ABOUT US</a>
  <a href="#1">CONTACT US</a>
  <a href="Question1.php">QUESTION 1</a>
  <a href="Enquiries.php">ENQUIRIES<a
  <a href="ShopByCategory.php">ShopByCategory<a>
  <a href="admin.php">ADMIN LOGIN<a>
  </h2>
  <input type="text" placeholder="Search">
</div>
</div>

<div class="one">
<div class="right">
<div class="slideshow">
<div class="myslides">
<img src="IMAGES/nat1.jpg" style="width:300; height:300;">
</div>

<div class="myslides">
<img src="IMAGES/dove4.jpg" style="width:300; height:300;">
</div>

<div class="myslides">
<img src="IMAGES/vas2.jpg" style="width:300; height:300;">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("myslides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</div>

<div class="left">
<h1>WELCOME</h1><br>
<p>The Skin Hub home to all things skincare<br> Elevate your routine with our quality skincare products<br>
<a href="ShopByCategory.html">SHOP NOW</a>
</p>
</div>
</div>

<div class="two">
<a href="ShopByCategory.html"><h3>SHOP BY CATEGORY</h3></a>
<a href="Enquiries.html"><h3>FOR ENQUIRIES CLICK HERE</h3></a>

</div>

<div class="three">
<div class="left">
<div class="contactdetails">
<div class="text1"><a id="1">CONTACT US</a></div>
<ul>
<li>
<span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
<span class="text">+263 772 546 237</span>
</li>
<li>
<span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
<span class="text">skinhub@gmail.com</span>
</li>
<li>
<span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
<span class="text">Greencroft, Harare. Zimbabwe</span>
</li>
</ul>
</div>
<div class="platforms">
<span class="icon"><i class="fa fa-instagram" aria-hidden="true"></i></span>
 <span class="icon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
 <span class="icon"><i class="fa fa-twitter-square" aria-hidden="true"></i></span>
<span class="icon"> <i class="fa fa-pinterest-p" aria-hidden="true"></i></span>
<span class="icon"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span>
</div>
</div>

<div class="right">
<div class="payment"><h3>PAYMENT METHODS</h3></div>
<ul><li>Ecocash</li>
<li>Telecash</li>
<li>OneMoney</li>
</ul>
<div class="icons2"><i class="fa fa-cc-mastercard" aria-hidden="true"></i> <i class="fa fa-cc-visa" aria-hidden="true"></i> <i class="fa fa-cc-paypal" aria-hidden="true"></i>
</div>
</div>
</div>
<a href="AboutUS.html" style="float:right;font-size:20px;color:tan;">NEXT PAGE >>></a>
</body>
</html>