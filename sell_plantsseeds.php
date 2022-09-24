<?php
$plantName2 = $_POST['plantName2'];
$scientificName2 = $_POST['scientificName2'];
$uses2 = $_POST['uses2'];
$typeofplant2 = $_POST['typeofplant2'];
$lifespan2 = $_POST['lifespan2'];
$location2 = $_POST['location2'];


$conn= new mysqli('localhost','root','','leaf_db');
if($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
}
else {
  $stmt = $conn->prepare("insert into sell_plantsseeds(plantName2, scientificName2, uses2, typeofplant2, lifespan2, location2)values(?,?,?,?,?,?)");
  $stmt->bind_param("ssssss",$plantName2, $scientificName2, $uses2, $typeofplant2, $lifespan2, $location2);
  $stmt->execute();
  echo "Your plant details has been submitted..!";
  echo "People interested in buying your plant will contact you through your email id or phone number";
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
                  <li><a href="logout.php">LOGOUT</a></li>
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

            <h1>  Your plant details has been submitted..! </h1>
            <p>People interested in buying your plant will contact you through your email id or phone number
                <!-- Add required information -->
                <br>
                <h4><a href="userprofile.html">Go back to my profile.</a></h4>
            </p>
            <!--<a href=""class="hero-btn">Visit to know more</a>-->
           </div>

  </body>
  </html>
