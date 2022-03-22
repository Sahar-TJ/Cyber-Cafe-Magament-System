<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCMS</title>
    <link rel= "stylesheet" href="assets/css/styleh.css">
    <script src="homepage.js"></script>
</head>
<body>
<div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Cyber Cafe</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#"> HOME </a></li>
                    <li><a href="/ccms/aboutus.php">ABOUT</a></li>
                    <li><a href="#service">SERVICES</a></li>
                    <li><a href="#gallery">GALLERY</a></li>
                    <li><a href="#footer">CONTACT US</a></li>
                </ul>
            </div>

            <div class="log">
                
                <a href="/ccms/signup.php"> <button class="butn">SIGN UP</button></a>

                <a href="/ccms/userlogin.php"> <button class="btn">LOG IN</button></a>
            </div>

        </div> 
        <div class="content">
            <h1>Welcome to <br><span>Cyber Cafe Management</span> <br>System</h1>
            <br>
            <p class="par">Book a Seat<br> Work with Us <br> Work in an Environment </p>

                <button class="cn"><a href="/ccms/userlogin.php">JOIN US</a></button>

                <div class="form">
                    <form action="" method="POST">
                    <h2>Book a Seat</h2>
                    <input class="lst" list="branch" name="" placeholder="Enter Branch">
                        <datalist id="branch">
                        <option value="Delhi">
                        <option value="Bhopal">
                        <option value="Indore">
                        <option value="Mumbai">
                        <option value="Hyderabad">
                        </datalist>
                    <input class="cal" type="datetime-local" name="Calender" placeholder="Enter Date & Time" >
                    <button class="btnn"><a href="\ccms\signup.php">Book</a></button>

                    <p class="link">Already a User?<br>
                    <a href="/ccms/userlogin.php">Login </a> & Book</a></p>
                    <p class="liw">Reach out to us</p>

                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="service" id="service">
    <h1>Services</h1>
    <br><br>
    <div class="box">
        <div class="bx">
             <h4>#1 in India</h4>
        </div>    
        <div class="bx"> 
            <h4>24/7 Services</h4>
        </div> 
        <div class="bx"> 
            <h4> 1000+ Branches</h4>
        </div>   
        <div class="bx"> 
            <h4> 10000+ users</h4>
        </div>    
    </div>
</div>

<div class="Gallery" id="gallery">
    <h1>Gallery</h1><br><br>
    
    <!-- Slideshow container -->
    <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
                <img src= "images/img1.jpg"  style="width:100%", height="500px">
        <div class="text">Bhopal Branch</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
            <img src="images/img2.jpg" style="width:100%", height="500px">
        <div class="text">Delhi Branch</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
            <img src="images/img3.jpg" style="width:100%", height="500px">
        <div class="text">Indore Branch</div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
<br>

    <!-- The dots/circles -->
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    </div>

</div>


<div class="team" id="team">
    <h1>Meet the Team</h1><br>

  <div class="mem">
    <div class="card">
      <img src="images/Sahar.jpeg" alt="Sahar" style="width:100%", height="440px">
      <div class="contain">
        <h2>Sahar Tosif Jamal</h2>
        <p class="title">CEO &amp; Founder</p>
        <p>Final Year BCA Student</p>
        <p>sahartosif@gmail.com</p><br>
        <p><button class="button">Contact</button></p><br>
      </div>
    </div>
  </div>

  <div class="mem">
    <div class="card">
      <img src="images/archana.jpeg" alt="Archana" style="width:100%", height="440px">
      <div class="contain">
        <h2>Archana Kumari</h2>
        <p class="title">Art Director</p>
        <p>Final Year BCA Student</p>
        <p>archanakumari@gmail.com</p><br>
        <p><button class="button">Contact</button></p><br>
      </div>
    </div>
  </div>

  <div class="mem">
    <div class="card">
      <img src="images/simra.jpeg" alt="Simra" style="width:100%", height="440px">
      <div class="contain">
        <h2>Simra Naeem</h2>
        <p class="title">Designer</p>
        <p>Final Year BCA Student</p>
        <p>simra@gmail.com</p><br>
        <p><button class="button">Contact</button></p><br>
      </div>
    </div>
  </div>
</div>


<div class="footer" id="footer">
    <div class="cntn">
        <div class="rw">
            <div class="footer-col">
                <h4>Company </h4>
                        <a href="/ccms/aboutus.php">About us</a>
                        <a href="#service">Services</a>
                        <a href="#gallery">Gallery</a>
                        <a href="#team">Team</a>                
            </div>

            <div class="footer-col">
                <h4>Join Us</h4>        
                        <a href="/ccms/userlogin.php">Login</a>
                        <a href="/ccms/signup.php">Sign Up</a>  
                        <a href="/ccms/index.php">Admin Login</a> 
            </div>

            <div class="footer-col">
                <h4>Contact</h4>                
                        <p>Sam academy, </p>
                        <p>Makhanlal Chaturvedi University,</p>
                        <p>Bhopal, Madhya Pradesh</p>
                        <p>+91 97527 32763</p>
            </div>

            <div class="footer-col">
                <h4> Follow Us </h4>
                <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                </div>
            </div>
        </div>
    </div>


</div>

<script src="http://localhost/ccms/assets/js/homepage.js"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>