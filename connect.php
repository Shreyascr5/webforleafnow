<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];



$conn= new mysqli('localhost','root','','leaf_db');
if($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
}
else {
  $stmt = $conn->prepare("insert into signup(firstName, lastName,email,phone,password)values(?,?,?,?,?)");
  $stmt->bind_param("sssis",$firstName, $lastName, $email, $phone, $password);
  $stmt->execute();
  echo "Registration successful";
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

            <h1> Welcome to LEAF NOW  </h1>
            <p>A Platform to connect plant or nature enthusiasts and help them exchange or sell them plants or donate saplings or seeds.
                <br>
                This is an initiative started by various NGOs in contact with <u>COMPSOFT TECHNOLOGIES</u>.
                <!-- Add required information -->
            </p>
            <!--<a href=""class="hero-btn">Visit to know more</a>-->
           </div>

    </section>
    <!--About-->
    <section class="ABOUT">
    <h1>EXCHANGE, DONATE, REQUEST plants of your choice in a single platform. </h1>
        <div class="row">
            <div class="inventory">
             <h3><a href="submit_offer.html">SUBMIT OFFER</a></h3>
             <p style = "color: black;">Contribute to save environment by donating plants and seeds. Your contribution is just a click away.</p>

            </div>
            <div class="inventory">
                <h3><a href="submit_request.html">SUBMIT REQUEST</a></h3>
                <p style = "color: black;">Looking for a specific species of plants to expand your garden? Sign up now to purchase wide varieties of plants from our sellers community.</p>

               </div>
               <div class="inventory">
                <h3><a href="view_offers_and_requests.html">VIEW OTHERS SUBMISSIONS</a></h3>
                <p style = "color: black;">Sell your plants and saplings at reasonable price to our large community of customers.</p>

               </div>
    </section>


  </body>
  </html>
