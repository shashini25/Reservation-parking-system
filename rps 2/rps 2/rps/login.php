<?php

/*$sgnup_scss_msg = require("process-signup.php");
if($sgnup_scss_msg){
    $sgnup_scss_alrt = "Signup successfully! please login";
}
*/

require 'process-login.php';


session_start();
if(isset($_SESSION["email"])){
    header ("Location: booking.php");
}

?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/fde649b50d.js" crossorigin="anonymous"></script>
	<style>
 header {
    position: sticky;
    top: -50px;
    background-image:linear-gradient(#033747,#012733);
    width: 100%;
    z-index: 1000;
}

.container1 {
    max-width: 65rem;
    padding: 0 10rem;
    margin: 0 auto;
    display: flex;
    position: relative;
}

.logo-container {
    flex: 1;
    display: flex;
    align-items: center;
}

.nav-btn {
    flex: 3;
    display: flex;
}

.log-sign {
    display: flex;
    justify-content: center;
    align-items: center;
    flex: 1;
}

.logo {
    color: firebrick;
    font-size: 1.1rem;
    font-weight: 800;
    letter-spacing: 2px;
    text-transform: uppercase;
    line-height: 3rem;
}

.logo span {
    font-weight: 300;
}

.btn {
    padding: .20rem 1.3rem;
    line-height: 1;
    margin: 0 .2rem;
    text-transform: uppercase;
}

.btn.solid,
.btn.transparent:hover {
    background-color: #4dd8eb;
    color: white;
}

.btn.transparent,
.btn.solid:hover {
    background-color:#4dd8eb;
    color:white;
}

.nav-links>ul {
    font-weight: bold;
    list-style: none;
    display: flex;
    justify-content: center;
    align-items: center;
}

.nav-link {
    position: relative;
}

.nav-link>a {
    text-decoration: none;
    line-height: 3rem;
    color: #fff;
    padding: 0 .8rem;
    letter-spacing: 1px;
    font-size: .95rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    transition: .5s;
}

.nav-link>a>i {
    margin-left: .2rem;
}

.nav-link:hover>a {
    transform: scale(1.1);
}

.nav-btn {
    flex: 3;
    display: flex;
}

.nav-links {
    flex: 2;

}



.logo-container img{
    margin-left: 5px;
}


 .btn {
  background-color: #4dd8eb;
  border: 1px;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 6px;
}   
    



    
.footer{
	margin-top: 450px;
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

        <div class="container1">

            <div class="logo-container">

                <img src="1.png" width="100" height="50" class="img">
                &nbsp;
                &nbsp;
                <h3 class="logo">Park<span>-Plus</span></h3>
            </div>
            
            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="index.php">HOME</a>
                        </li>

                        <li class="nav-link" style="--i: 1.35s">
                            <a href="about (2).html">ABOUT</a>
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="Contact Us-1.html">CONTACT</a>
                        </li>

                    </ul>
                </div>

 
                <div class="log-sign" style="--i: 1.8s">
                    <a href="login.php" class="btn transparent">Log in</a>
                    <a href="signup.php" class="btn solid">Sign up</a>
                   
                </div>
            </div>

            

    </header>
    <div class="center">
      <h1>Login</h1>
    <!--  <div>
            <h3 style = "color: blue;"><?php /*echo $sgnup_scss_alrt;*/ ?></h3>
      </div> -->
      <form action = "process-login.php" method="post">
        <div class="txt_field">
          <input type="text" name = "username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name= "password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" name="login" value="Login">
        <div class="signup_link">
          Not a member? <a href="#">Signup</a>
        </div>
        <div>
            <h3 style = "color: red;"></h3>
        </div>
      </form>
    </div>
<br><br><br><br>
<div class = "footer">
	<div class = "col-1">
			<h3>Get Us On</h3>
			
			<a href = "#">Google Play</a>
			<a href = "#">App Store</a>
	</div>
			
			<div class = "col-2"></div>
			<h3>Quick Links</h3>
			<a href = "#">Home</a>
			<a href = "#">Contact Us</a>
			<a href = "#">About</a>
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

  </body>
</html>
