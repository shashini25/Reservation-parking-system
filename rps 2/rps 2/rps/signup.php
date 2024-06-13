<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/fde649b50d.js" crossorigin="anonymous"></script>
<style>

body{
  margin: 0;
  padding: 0;
  background: linear-gradient(120deg,#2980b9, #8e44ad);
  height: auto;
}
header {
    position: fixed;
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
.center{
  position: absolute;
  margin-top: 450px;
  margin-left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  background: white;
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
}
.center h1{
  text-align: center;
  padding: 20px 0;
  border-bottom: 1px solid silver;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
}
form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}
.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #2691d9;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
  width: 100%;
}

input[type="submit"]{
  width: 80%;
  height: 40px;
  border: 1px solid;
  background: #2691d9;
  border-radius: 20px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
}
input[type="submit"]:hover{
  border-color: #2691d9;
  transition: .5s;
}
.footer{
	margin-top: 850px;
	width: 70%;
	padding: 75px 15%;
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
                            <a href="homepage.html">HOME</a>
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
<br><br><br><br>
  
  

	
    <div class="center">
      <h1>Sign Up</h1>

      <form action="process-signup.php" method="post">
       <div class="txt_field">
          <input type="name" name="name" required>
          <span></span>
          <label>Full name</label>
        </div>
     <div class="txt_field">
          <input type="number" name="contact_number" required>
          <span></span>
          <label>Contact Number</label>
        </div>
        <div class="txt_field">
          <input type="text" name="email"   required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
		<div class="txt_field">
          <input type="password" name="rptpassword"  required>
          <span></span>
          <label>Repeat Password</label>
        </div>
		<label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
        <br>
         <center><input type="submit" value="Sign Up"></center>
		 <br>
		  <center><input type="submit" value="Cancel"> </center>
		 <br>
    </div>
        
      </form>
    </div>
<br><br>
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
			
			<div class = "col-2"</div>
			<h3>Quick Links</h3>
			<a href = "homepage.html">Home</a>
			<a href = "Contact Us-1.html">Contact Us</a>
			<a href = "about (2).html">About</a>
		</div>	
			<div class = "col-3"</div>
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
