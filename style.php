
body{
	background: purple;
}
.heading{
	
	width:100%;
	background: purple;
	overflow-x: hidden;
	position: fixed;
  z-index: 4;
}
.heading h1{
	color: tan;
	font-size:50px;
	text-align:center;
	font-weight: 300px;
}
.heading h2{
	color: tan;
	font-size:10px;
}
.tab {
  height: 160px;
  width: 100%;
  position: fixed;
  z-index: 6;
  top: 0;
  left: 0;
  overflow-x: hidden;
  padding-top: 20px;
}
.tab a {
  padding: 6px 8px 6px 16px;
  font-style: oblique;
  font-family:"Courier New", monospace;
  font-size: 15px;
  color: tan;
  font-family: monospace;
  
}
.tab a:hover {
  color: tan;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

.tab input[type=text]{
	float:right;
	display:block;
	text-align:left;
	margin:0;
	padding:10px;
	border: 3px solid tan;
	background-color:purple;
	color: tan;
	font-size: 15px;
	
}

.one{
	position:relative;
		background: pink;
		width:80%; 
		padding-top: 100px;
    padding-right: 100px;  
    padding-bottom: 150px;  
    padding-left: 200px; 
	display:grid;
	grid-template-columns: 2fr 2fr;
		
}

.one h1{
	color: purple;
	font-size:30px;
	text-align:center;
	font-weight: 100px;
}
.one .right{
	background-color:white;
	padding-top: 50px;
}
.table th, td {
	
  border: 1px solid purple;
  border-radius: 10px;}
.slideshow{
  width:50%;
  max-width: 300px;
  position:relative;
  margin: auto;
  padding-top: 0px;
 }

.myslides{
  display: none;

}
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.one form{
	width:90%;
	max-width:500px;
	padding: 50px 30px 20px;
	border-radius: 4px;
	position: relative;
	background: white;
}
.input {
	width:100%;
	display:flex;
	align-items: center;
	margin: 10px 0;
	position:relative;
}
.input label{
	flex-basis: 28%;
}
.input input, .input textarea{
	flex-basis: 68%;
	background: transparent;
	border:0;
	outline:0;
	padding: 10px 0;
	border-bottom: 1px solid purple;
	color:tan;
	font-size: 16px;
}
::placeholder{
	font-size:14px;
}
form button{
	background:pink;
	color:purple;
	border-radius: 4px;
	border: 1px solid purple;
	padding: 10px 40px;
	outline: 0;
	cursor:pointer;
	display:block;
	margin: 30px auto 10px;
}
.input span{
	position:absolute;
	bottom: 12px;
	right: 17px;
	font-size:14px;
	color: red;
	}
	#submit-error{
		color:red;
	}
	.input span i{
		color: seagreen;
	}

.one .left{
	padding-top:50px;
	padding-left:50px;
	text-align: center;
}
.left p{
	font-size: 20px;
	color: purple;
}
.left a{
	display: inline-block;
	text-decoration:none;
	color: tan;
	background:purple;
	padding: 10px 5px;
	font-size:18px;
	margin-top:50px;
	border-radius:6px;
}

.two {
	position:relative;
		background: purple;
		width:80%; 
		padding-top: 100px;
    padding-right: 100px;  
    padding-bottom: 150px;  
    padding-left: 200px; 	
		
}

.two h3{
	
	color: pink;
	font-size:30px;
	text-align:center;
	font-weight: 150px;
	padding-top: 10px;
}

.two2 {
	position: relative;
	background:purple;
	width:80%;
	padding-top: 100px;
    padding-right: 100px;  
    padding-bottom: 150px;  
    padding-left: 200px; 
	display:grid;
    grid-template-columns: 2fr 2fr;	
}
.two2 h1{
	color: pink;
	font-size:30px;
	text-align:center;
	font-weight: 100px;
}
.two2 .right{
	background-color:white;
}
.two2 .right img{
	position:relative;
	padding-left:200px;
	padding-right:200px;
}



.three{
	position: relative;
	width:80%;
	background:pink;
    padding-top: 100px;
    padding-right: 100px;  
    padding-bottom: 150px;  
    padding-left: 200px; 
	display:grid;
    grid-template-columns: 2fr 2fr;	
	}
.three .left{
	position: relative;
	padding-top: 0px;
	
	}
	.text1 a{
		font-size:20px;
		color:purple;
		background:pink;
		padding: 0 40px;
		text-decoration: underline;
		
	}
.contactdetails
	{
		padding-top:40px;	
	}
	.contactdetails ul
	{
		position:relative;
		
	}
	.contactdetails ul li
	{
		position:relative;
		list-style:none;
		margin: 10px 0;
		cursor: pointer;		
	}
	.contactdetails ul li .icon
	{
		display: inline-block;
		width:30px;
		font-size: 18px;
		color: purple; 
	}
	.contactdetails ul li span
	{
		color: purple;
	}
	.platforms{
		margin: 10px 0;
		color: purple;
		font-size:50px;
		line-height: 2;
		padding-left: 30px;
	}
	.three .right{
	position:relative;
	padding: 40px;
	}
	.payment{
		text-decoration:underline;
		color:purple;
		font-size: 20px;
		padding: 0 40px;
	}
	.right ul{
		color:purple;
		line-height:1;
		font-size: 18px;
		width:30px;
		margin: 10px 0;
		display: inline-block;
		position:relative;
	}
	.icons2{
		margin: 10px 0;
		color: purple;
		font-size:50px;
		line-height: 2;
		padding-left: 50px;
		padding-top: 10px;
	}

.threee{
	position: relative;
	width:80%;
	background:purple;
    padding-top: 100px;
    padding-right: 100px;  
    padding-bottom: 150px;  
    padding-left: 200px; 
	display:grid;
    grid-template-columns: 2fr 2fr;	
	}	
.threee .left{
	position: relative;
	padding-top: 0px;
	
	}
	.threee .text1 a{
		font-size:20px;
		color:pink;
		background:purple;
		padding: 0 40px;
		text-decoration: underline;
		
	}
.threee .contactdetails
	{
		padding-top:40px;	
	}
	.threee .contactdetails ul
	{
		position:relative;
		
	}
	.threee .contactdetails ul li
	{
		position:relative;
		list-style:none;
		margin: 10px 0;
		cursor: pointer;		
	}
	.threee .contactdetails ul li .icon
	{
		display: inline-block;
		width:30px;
		font-size: 18px;
		color: pink; 
	}
	.threee .contactdetails ul li span
	{
		color: pink;
	}
	.threee .platforms{
		margin: 10px 0;
		color: pink;
		font-size:50px;
		line-height: 2;
		padding-left: 30px;
	}
	.threee .right{
	position:relative;
	padding: 40px;
	}
	.threee .payment{
		text-decoration:underline;
		color:pink;
		font-size: 20px;
		padding: 0 40px;
	}
	.threee .right ul{
		color:pink;
		line-height:1;
		font-size: 18px;
		width:30px;
		margin: 10px 0;
		display: inline-block;
		position:relative;
	}
	.threee .icons2{
		margin: 10px 0;
		color: pink;
		font-size:50px;
		line-height: 2;
		padding-left: 50px;
		padding-top: 10px;
	}	
	
	.three3{
	position: relative;
	background:pink;
	width:80%;
	padding-top: 100px;
    padding-right: 100px;  
    padding-bottom: 150px;  
    padding-left: 200px; 
	display:grid;
    grid-template-columns: 2fr 2fr;	
	}
	.three3 h1{
	color: purple;
	font-size:30px;
	text-align:center;
	font-weight: 100px;
}
.three3 .right{
	background-color:white;
}
.three3 .right img{
	position:relative;
	padding-left:200px;
	padding-right:200px;
}
.table th, td {
	
  border: 1px solid purple;
  border-radius: 10px;}