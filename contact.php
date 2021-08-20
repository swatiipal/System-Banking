<!DOCTYPE html>
 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Us form</title>
	<link href="style.css" rel="stylesheet">

    
	<style>

@import 'https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300';

html,body {
  height: 100%;
  width: 100%;
  margin: 0;
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  font-family: 'Open Sans Condensed', sans-serif;
}

.col {
  height: 100%;
}

div[class*=container] {
  text-align: center;
  width: 100%;
  height: 33%;
  display: flex;
  justify-content: center;
  align-items: center;
}

section{
  
  padding: 2rem 2%;
  font-size: 2 rem;
  font-weight: 500;
  color: #fff;
}

* {
	box-sizing: border-box;
}
body {
	font-family: poppins;
	font-size: 16px;
	color: #fff;
}
.form-box {
	background-color: rgba(0, 0, 0, 0.5);
	margin: auto auto;
	padding: 40px;
	border-radius: 5px;
	box-shadow: 0 0 10px #000;
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	width: 500px;
	height: 500px;
}
.form-box:before {
	background-image: url("https://i.postimg.cc/8cnYLpfc/ddddd.jpg");
	width: 100%;
	height: 100%;
	background-size: cover;
	content: "";
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	z-index: -1;
	display: block;
	filter: blur(2px);
}
.form-box .header-text {
	font-size: 32px;
	font-weight: 600;
	padding-bottom: 30px;
	text-align: center;
}
.form-box input {
	margin: 10px 0px;
	border: none;
	padding: 10px;
	border-radius: 5px;
	width: 100%;
	font-size: 18px;
	font-family: poppins;
}
.form-box input[type=checkbox] {
	display: none;
}
.form-box label {
	position: relative;
	margin-left: 5px;
	margin-right: 10px;
	top: 5px;
	display: inline-block;
	width: 20px;
	height: 20px;
	cursor: pointer;
}
.form-box label:before {
	content: "";
	display: inline-block;
	width: 20px;
	height: 20px;
	border-radius: 5px;
	position: absolute;
	left: 0;
	bottom: 1px;
	background-color: #ddd;
}
.form-box input[type=checkbox]:checked+label:before {
	content: "\2713";
	font-size: 20px;
	color: #000;
	text-align: center;
	line-height: 20px;
}
.form-box span {
	font-size: 14px;
}
.form-box button {
	background-color: deepskyblue;
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	width: 100%;
	font-size: 18px;
	padding: 10px;
	margin: 20px 0px;
}
span a {
	color: #BBB;
}

    </style>
</head>

<body>
<section>

	<div class="form-box">
	  <form action="contact_action.php" method="post" role="form" class="php-email-form">
		<div class="header-text">
			Contact Form
		</div>
			<input name="name" placeholder="Your Name" type="text"> 
		 	<input name="email" placeholder="Your Email Address" type="email">  
		 	<input name="subject" placeholder="Subject" type="text">
		 	<input name="message" placeholder="Message" type="text">  
		 	<span> <a href="#">Terms & Conditions</a></span>
		 <button type="submit" name="contact_btn">Submit</button>
	  </form>
	
	</div>

</section>

</body>
</html>
