<?php
$plantName = $_POST['plantName'];
$scientificName = $_POST['scientificName'];
$uses = $_POST['uses'];
$typeofplant = $_POST['typeofplant'];
$lifespan = $_POST['lifespan'];
$location = $_POST['location'];


$conn= new mysqli('localhost','root','','leaf_db');
if($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
}
else {
  $stmt = $conn->prepare("insert into submit_offer(plantName, scientificName, uses, typeofplant, lifespan, location)values(?,?,?,?,?,?)");
  $stmt->bind_param("ssssss",$plantName, $scientificName, $uses, $typeofplant, $lifespan, $location);
  $stmt->execute();
  echo "Your offer has been submitted..!";
  $stmt->close();
  $conn->close();
}


?>


<html>
<head>
  <title>profile</title>
</head>
<body>
  <link rel="stylesheet" href="style.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
    rel="stylesheet" />

  <body>
  <section class="header">
      <nav>
          <a href="index.html">
              <img src="https://www.bing.com/th?id=AMMS_fd39ac4706d56959a830958f624fadee&w=72&h=72&c=7&rs=1&qlt=80&o=6&cdv=1&dpr=1.5&pid=16.1">
          </a>
          <div class="nav-links" id="navLinks">
              <i class="fa fa-times" onclick="hideMenu()"></i>
              <ul>
                  <li><a href="loginSQL.html">HOME</a></li>
                  <li><a href="logout.php">logout</a></li>
                  <li><a href="https://www.compstechnologies.com/support">CONTACT</a></li>
              </ul>
          </div>
          <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>
  <div class="nav-links" id="navLinks">
    <i class="fa fa-times" onclick="hideMenu()"></i>

    <section class="header">
        <nav>
            <a href="index.html">
                <!--<img src="https://www.bing.com/th?id=AMMS_fd39ac4706d56959a830958f624fadee&w=72&h=72&c=7&rs=1&qlt=80&o=6&cdv=1&dpr=1.5&pid=16.1">-->
            </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                  <!--  <li><a href="http://127.0.0.1:5500/index.html">HOME</a></li>
                    <li><a href="http://127.0.0.1:5500/login1.html">JOIN US</a></li>
                    <li><a href="http://127.0.0.1:5500/ms.html">MEMBERSHIP PURCHASE</a></li>
                    <li><a href="">CUSTOMER PHOTOS</a></li>
                    <li><a href="https://www.compstechnologies.com/support">CONTACT</a></li>-->
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
           <div class="text-box">

            <h1> Your offer has been submitted..!  </h1>
            <p>You may receive an email or phone call from our other registered members if they are willing to exchange plant with you.
                <!-- Add required information -->
                <br>
                <h4><a href="userprofile.html">Go back to my profile.</a></h4>
            </p>
            <!--<a href=""class="hero-btn">Visit to know more</a>-->
           </div>

  </body>
  </html>
