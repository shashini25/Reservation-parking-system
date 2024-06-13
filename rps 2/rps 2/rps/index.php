<?php
?>

<!DOCTYPE html>
<html>

<head>
<title>Home Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://kit.fontawesome.com/fde649b50d.js" crossorigin="anonymous"></script>
<style>
.mySlides {display:none;}

h1{

}
 .container,
  .img{text-align: center;}
  
  .container {
   
    margin: auto;
}
  
  .button {
  background-color: #4dd8eb;
  border: none;
  color: white;
  padding: .20rem 1.3rem;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 2rem;
  margin: 0 .2rem;
    transition: .3s;
    text-transform: uppercase;
}
.footer{
	margin-top: 5px;
	width: 100%;
	padding: 100px 15%;
	background: #333;
	color: #efefef;
	display: flex;
}

.footer div{
	text-align:center;
}

.col-2{
	flex-grow:1;
}

.footer div h3{
	font-weight: 300;
	margin-bottom:30px;
	letter-spacing:1px;
}

.col-1 a{
	display: block;
	text-decoration:none;
	color:#efefef;
	margin-bottom:10px;
}

.col-2 a{
	display: block;
	text-decoration:none;
	color:#efefef;
	margin-bottom:10px;
}

.col-3 a{
	display: block;
	text-decoration:none;
	color:#efefef;
	margin-bottom:10px;
}

.social-icons{
	margin-top:30px;

}

.social-icons i{
	font-size:22px;
	margin: 10px;
	cursor:pointer;
}

        
</style>
</head>

<body>
<header>


<div class = "container">
	<div>
	
		<div class="w3-display-center w3-container w3-padding-16 w3-black w3-center w3-animate-left w3-large">
<h1 style="font-size:400%;">WELCOME</h1>		
		
 <img src="1.png" width="200" height="100" class="left">

	
	
		
		  </div>			
	</div>
 </div>
 					

  <div class="w3-content w3-section w3-right-align w3-display-topright w3-container"> <style="max-width:1000px">
   <div class="log-sign" style="--i: 1.8s">
					 
                   
					
					<a href="login.php" class="button"><p class="w3-hover-text-red">Log In</p></a>
					<a href="signup.php" class="button"><p class="w3-hover-text-red">Sign Up</p></a>
                    
                </div>
            </div>
 
  <img class="mySlides" src="carpark.jpg" style="width:100%" >
  <img class="mySlides" src="carpark1.jpg" style="width:100%">
  <img class="mySlides" src="carpark2.jpg" style="width:100%">
</div>


              


</header>
</div>
<div class = "footer">
	<div class = "col-1">
			<h3>Get Us On</h3>
                         <ul>
                        <a href="https://play.google.com/store/apps">
                            <img src="play.png" width="150" height="60" class="left"></a> <br>

                        <a href="https://www.apple.com/app-store/">
                            <img src="apps.png" width="150" height="60" class="left"></a><br>
                        </ul>

			
			
	</div>
			
			<div class = "col-2">
			<h3>Quick Links</h3>
			<a href = "index.php">Home</a>
			<a href = "Contact Us-1.html">Contact Us</a>
			<a href = "about (2).html">About</a>
		</div>	
			<div class = "col-3"></div>
			<h3>Follow Us</h3>
			<div class = "social-icons">
				<i class="fa-brands fa-facebook"></i>
				<i class="fa-brands fa-instagram"></i>
				<i class="fa-brands fa-google"></i>
				<i class="fa-brands fa-twitter"></i>
			</div>
			
			</div>
	</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
