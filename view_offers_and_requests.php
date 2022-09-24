<!DOCTYPE html>
<html>
<head>
  <style>
  table,th,td{
    border: 1px solid white;
    border-collapse: collapse;
  }
  td{
    height: 70px;
    width: 100px;
  }

  </style>
  <title>Database view </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width", initial-scale=1.0">
  <title>LEAF NOW</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
</head>
<body>

      <section class="header">
          <nav>
              <a href="index.html">
                  <img src="https://www.bing.com/th?id=AMMS_fd39ac4706d56959a830958f624fadee&w=72&h=72&c=7&rs=1&qlt=80&o=6&cdv=1&dpr=1.5&pid=16.1">
              </a>
              <div class="nav-links" id="navLinks">
                  <i class="fa fa-times" onclick="hideMenu()"></i>
                  <ul>
                      <li><a href="index.html">HOME</a></li>
                      <li><a href="index.html">LOGOUT</a></li>
                      <li><a href="https://www.compstechnologies.com/support">CONTACT</a></li>
                  </ul>
              </div>
              <i class="fa fa-bars" onclick="showMenu()"></i>
          </nav>
          <h1 style="color:white;"> LIST OF OFFERS by our members.  </h1><br>
          <h3 style="color:white;"><u> You can contact them using their email-id and phone number given below</u></h3>
          <br>
          <br>
          <table style="color:white;">
            <tr><th>Sl no.</th>
              <th>FirstName</th>
              <th>LastName</th>
              <th>Email</th>
              <th>Phone</th>
              <th>plantName</th>
              <th>Scientific Name</th>
              <th>Uses</th>
              <th>Type of plant</th>
              <th>Lifespan</th>
              <th>Location</th>
            </tr>


                        <?php
                        $conn = mysqli_connect('localhost','root','','leaf_db');
                        if($conn->connect_error){
                          die("Connection failed: ".$conn->connect_error);
                        }


                          $sql ="SELECT signup.id, signup.firstName, signup.lastName, signup.email, signup.phone, submit_offer.plantName, submit_offer.scientificName, submit_offer.uses, submit_offer.typeofplant, submit_offer.lifespan, submit_offer.location FROM signup,submit_offer
                          WHERE signup.id=submit_offer.id ORDER BY signup.id";
                          $result = $conn-> query($sql);

                          if($result-> num_rows>0){
                            while ($row = $result-> fetch_assoc()) {
                              echo "<tr><td>".$row["id"]."</td><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["plantName"]."</td><td>".$row["scientificName"]."</td><td>".$row["uses"]."</td><td>".$row["typeofplant"]."</td><td>".$row["lifespan"]."</td><td>".$row["location"]."</td></tr>";
                            }
                            echo "</table>";
                          }
                          else{
                            echo "0 result";
                          }

                          $conn-> close();




                         ?>

                    </table>


                    <h1 style="color:white;"> LIST OF REQUESTS by our members.  </h1>
                    <br>
                    <br>
                    <table style="color:white;">
                    <tr><th>Sl no.</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>plantName</th>
                    <th>Scientific Name</th>
                    <th>Uses</th>
                    <th>Type of plant</th>
                    <th>Lifespan</th>
                    <th>Location</th>
                  </tr>


                              <?php
                              $conn = mysqli_connect('localhost','root','','leaf_db');
                              if($conn->connect_error){
                                die("Connection failed: ".$conn->connect_error);
                              }


                                $sql ="SELECT signup.id, signup.firstName, signup.lastName, signup.email, signup.phone, submit_request.plantName1, submit_request.scientificName1, submit_request.uses1, submit_request.typeofplant1, submit_request.lifespan1, submit_request.location1 FROM signup,submit_request
                                WHERE signup.id=submit_request.id ORDER BY signup.id";
                                $result = $conn-> query($sql);

                                if($result-> num_rows>0){
                                  while ($row = $result-> fetch_assoc()) {
                                    echo "<tr><td>".$row["id"]."</td><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["plantName1"]."</td><td>".$row["scientificName1"]."</td><td>".$row["uses1"]."</td><td>".$row["typeofplant1"]."</td><td>".$row["lifespan1"]."</td><td>".$row["location1"]."</td></tr>";
                                  }
                                  echo "</table>";
                                }
                                else{
                                  echo "0 result";
                                }

                                $conn-> close();




                               ?>

                          </table>

                          <h1 style="color:white;"> LIST OF PLANTS FOR SALE by our members.  </h1>
                          <br>
                          <br>
                          <table style="color:white;">
                          <tr><th>Sl no.</th>
                          <th>FirstName</th>
                          <th>LastName</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>plantName</th>
                          <th>Scientific Name</th>
                          <th>Uses</th>
                          <th>Type of plant</th>
                          <th>Lifespan</th>
                          <th>Location</th>
                        </tr>


                                    <?php
                                    $conn = mysqli_connect('localhost','root','','leaf_db');
                                    if($conn->connect_error){
                                      die("Connection failed: ".$conn->connect_error);
                                    }


                                      $sql ="SELECT signup.id, signup.firstName, signup.lastName, signup.email, signup.phone, sell_plantsseeds.plantName2, sell_plantsseeds.scientificName2, sell_plantsseeds.uses2, sell_plantsseeds.typeofplant2, sell_plantsseeds.lifespan2, sell_plantsseeds.location2 FROM signup,sell_plantsseeds
                                      WHERE signup.id=sell_plantsseeds.id ORDER BY signup.id";
                                      $result = $conn-> query($sql);

                                      if($result-> num_rows>0){
                                        while ($row = $result-> fetch_assoc()) {
                                          echo "<tr><td>".$row["id"]."</td><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["plantName2"]."</td><td>".$row["scientificName2"]."</td><td>".$row["uses2"]."</td><td>".$row["typeofplant2"]."</td><td>".$row["lifespan2"]."</td><td>".$row["location2"]."</td></tr>";
                                        }
                                        echo "</table>";
                                      }
                                      else{
                                        echo "0 result";
                                      }

                                      $conn-> close();




                                     ?>

                                </table>

      </section>

<!--About-->
<section class="ABOUT">
  <p>Compsoft Technologies is an IT Services provider that aims to provide software, designing and marketing solutions to individuals and businesses.
  </p>
  <a href="https://www.compstechnologies.com/">FOR MORE DETAILS REGARDING WEBSITE DEV </a>

      <p>MADE WITH  LOVE BY TEAM GAMBIT</p>


</body>
<!------Javascript for Toggle Menu---->
<script>
  var navLinks=document.getElementById("navLinks");
  function showMenu(){
      navLink.style.right="0";
  }
  function hideMenu(){
      navLink.style.right="-200px";
  }
</script>

</body>
</html>
