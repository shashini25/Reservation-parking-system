<?php
session_start();
if(isset($_SESSION["email"])){
  $name = $_SESSION["name"];
} 

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/fde649b50d.js" crossorigin="anonymous"></script>

<style>
  
header {
    position: sticky;
    top: 0px;
    background-image:linear-gradient(#033747,#012733);
    width: 100%;
    height: 15vh;
    display:fixed;
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



body {
  margin:0px;
  background-image: url("Background.jpg");  
  height: 150vh;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.p{
  color:black;
  font-size:30px;
  text-align: center;
  padding-top: 35px;
  font-weight: bold;
  letter-spacing: 2px;
}
h1{
  margin-left: 390px;
  text-align: center;
  font-size: 40px;
  letter-spacing: 5px;
  width: 600px;
}
.box{
  padding: 20px;
  background-color: rgb(100, 99, 99);
  width: auto;
  height: 40vh;
}
.box h2{
  letter-spacing: 1.5px;
  color: snow;
  padding-top: 0px;
  padding-left: 50px;
  font-family: Arial, Helvetica, sans-serif;
}
.info{
  padding-top: 0px;
  padding-left: 100px;

}
.info div{
  display: flex;
  float:left;
  padding: 20px;
}
.log_out {
  color:white;
  float:right;
}
.info select{
  background-color: rgb(155, 155, 233);
  border: 2px solid black;
  margin-left: 30px;
  margin-top: 16px;
  width: 150px;
  height: 35px;
}

.info select option{
  font-size: 15px;
  
}
.info input.time{
  margin-left: 20px;
  margin-top: 16px;
  width: 150px;
  height: 30px;
  background-color: rgb(155, 155, 233);
  border: 2px solid black;
}
.info input.date{
  margin-left: 20px;
  margin-top: 16px;
  width: 150px;
  height: 30px;
  background-color: rgb(155, 155, 233);
  border: 2px solid black;
}
.info .submit{
  font-size: 15px;
  background-color: rgb(75, 75, 155);
  border: 1px solid black;
  color: white;
  text-align: center;
  margin: 30px;
  margin-left: 525px;
  padding: 8px;
  width: 150px;
}
.footer{
	margin-top: 150px;
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
					<div class="log_out">
                  <h3><?php echo "Welcome ".$name; ?></h3>
                  <a href = "logout.php"><p font-size: 20px;>log out</p></a>
          </div>
            

    </header>

<section>
<div class="p">- Online parking -</div>
<h1>Best Parking Spaces For Your Vehicles</h1>
</section>
<br><br><br><br><br><br>

<div class="box">
  <h2>Find Your Parking Space</h2>
<div class="info">
<form action="process-booking.php" method="post">
<div>
  <h4>Vehicle No.</h4><input type="text" name="vehicle_number" class="date" placeholder="ex: CBC-0851" required>
</div>
<div>
<h4>Location</h4>
<select name="location">
    <option>Colombo</option>
    <option>Nugegoda</option>
    <option>Kaluthara</option>
    <option>Gampaha</option>
  </select>
</div>
<div>  
  <h4>Date</h3><input type="date" class="date" name="date" placeholder="Date" required>
</div>
<div>
  <h4>Check In</h3><input type="time" class="time" name="checkin" placeholder="Time" required>
</div>
<div>
<h4>Check out</h3><input type="time" class="time" name="checkout" placeholder="Time" required>
</div>
<br>
<input type="submit" neme = book_now value="Book now" class="submit">
</div>
</div>
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
			<a href = "homepage.html">Home</a>
			<a href = "Contact Us-1.html">Contact Us</a>
			<a href = "about (2).html">About</a>
		</div>	
			<div class = "col-3">
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
