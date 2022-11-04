<!DOCTYPE>
<html>
<head>
<title>Shop By Category</title>
<link rel="stylesheet" href="style.php">
</head>
<body>
<div class="heading">
<div class="logo">
<h1>THE SKIN HUB</h1>
</div>
<div class="tab">
<h2>
  <a href="home.php">HOME</a>
  <a href="AboutUS.php">ABOUT</a>
  <a href="Enquiries.php">ENQUIRIES<a>
  </h2>
  <input type="text" placeholder="Search">
</div>
</div>

<div class="one">
<h1>SHOWER CARE</h1><br>

<div class="right">
<div class="slideshow">

<div class="myslides">
<img src="dove1.jpg" style="width:300; height:300;">
</div>
<div class="myslides">
<img src="dove3.jpg" style="width:300; height:300;">
</div>
<div class="myslides">
<img src="dove4.jpg" style="width:300; height:300;">
</div>
<div class="myslides">
<img src="th2.jpg" style="width:300; height:300;">
</div>
<div class="myslides">
<img src="fresh.jpg" style="width:300; height:300;">
</div>
<div class="myslides">
<img src="scrub.jpg" style="width:300; height:300;">
</div>
<div class="myslides">
<img src="nat1.jpg" style="width:300; height:300;">
</div>
<div class="myslides">
<img src="olay1.jpg" style="width:300; height:300;">
</div>
<div class="myslides">
<img src="olay2.jpg" style="width:300; height:300;">
</div>
<div class="myslides">
<img src="sanex1.jpg" style="width:300; height:300;">
</div>
<div class="myslides">
<img src="sanex2.jpg" style="width:300; height:300;">
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
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
</div>

<div class="leftt">
<div class="table">
<table>
<tr>
<th>PRODUCT</th>
<th>PRICE</th>
</tr>
<tr>
<td>
<ul>
<li>Olay body wash</li>
<li>Olay body conditioner</li>
</ul>
</td>
<td>
<ul>
<li>$10</li><li>$8</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li>Dove body wash</li>
<li>Dove mousse</li>
<li>Dove scrub</li>
</ul>
</td>
<td>
<ul>
<li>$10</li><li>$20</li><li>$18</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li>Sanex body wash</li>
<li>Naturium body wash</li>
<li>TreeHut body wash</li>
</ul>
</td>
<td>
<ul><li>$8</li><li>$20</li><li>$20</li></ul>
</td>
</tr>
<tr>
<td>
<ul>
<li>Fresh scrub</li>
<li>Herbivore body scrub</li>
</ul>
</td>
<td>
<ul>
<li>$70</li><li>$40</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul><li>Nivea shower oil</li><li>Nivea shower gel</li></ul>
</td>
<td>
<ul><li>$8</li><li>$12</li></ul>
</td>
</tr>
</table>
</div>
</div>
</div>

<div class="two2">
<h1>BODY CARE</h1><br>
<div class="right">
<img src="bodycare.jpg" style="width:400; height:400; align:middle;">
</div>

<div class="left">
<div class="table">
<table>
<tr>
<th>PRODUCT</th>
<th>PRICE</th>
</tr>
<tr>
<td>
<ul>
<li>Vaseline lotion/cream</li>
<li>Vaseline healing serum</li>
<li>Vaseline petroleum jelly</li>
<li>Vaseline body oil</li>
</ul>
</td>
<td>
<ul>
<li>$10</li><li>$25</li><li>$2</li><li>$15</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li>Nivea sunscreen</li>
<li>Eucerin sunscreen</li>
</ul>
</td>
<td>
<ul>
<li>$16</li><li>$30</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li>Bom Dia Cream</li>
<li>The Ritual of Ayurveda Body Cream</li>
<li>Brazilian bum bum</li>
</ul>
</td>
<td>
<ul><li>$40</li><li>$45</li><li>$40</li></ul>
</td>
</tr>
<tr>
<td>
<ul>
<li>Jergens lotion</li>
<li>Victoria's Secret Lotion</li>
</ul>
</td>
<td>
<ul>
<li>$15</li><li>$15</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul><li>Bio oil</li><li>The Ritual of Ayurveda Body Oil</li></ul>
</td>
<td>
<ul><li>$20</li><li>$50</li></ul>
</td>
</tr>
</table>
</div>
</div>
</div>

<div class="three3">
<h1>FACIAL CARE</h1><br>
<div class="right">
<img src="facecare.jpg" style="width:400; height:400; align:middle;">
</div>

<div class="left">
<div class="table">
<table>
<tr>
<th>PRODUCT</th>
<th>PRICE</th>
</tr>
<tr>
<td>
<ul>
<li>Garnier PureActive 3in1</li>
<li>Garnier Black Tissue Mask</li>
<li>Garnier Toner</li>
<li>Garnier Vitamin C Serum</li>
</ul>
</td>
<td>
<ul>
<li>$15</li><li>$10</li><li>$12</li><li>$20</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li>Neutrogena HydroBoost Exfoliator</li>
<li>Neutrogena HydroBoost Cleanser</li>
</ul>
</td>
<td>
<ul>
<li>$14</li><li>$14</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li>Paula's Choice Overnight Mask</li>
<li>Paula's Choice 2%BHA Liquid Exfoliant</li>
<li>Paula's Choice Anti-Aging Moisturiser</li>
</ul>
</td>
<td>
<ul><li>$38</li><li>$25</li><li>$60</li></ul>
</td>
</tr>
<tr>
<td>
<ul>
<li>The Ordinary Salicylic Acid</li>
<li>The Ordinary Mandelic Acid</li>
<li>Fresh Overnight Mask</li>
</ul>
</td>
<td>
<ul>
<li>$16</li><li>$16</li><li>$60</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul><li>PIXI Glow Tonic</li><li>PIXI Collagen Tonic</li></ul>
</td>
<td>
<ul><li>$22</li><li>$22</li></ul>
</td>
</tr>
</table>
</div>
</div>

</div>
<a href="AboutUS.html" style="color:tan;float:left; font-size:20px;">PREVIOUS PAGE </a>
<a href="ShopByCategory.html" style="color:tan;float:right;font-size:20px;">QUESTION 1 >>></a>
</body>
</html>