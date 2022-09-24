<?php
$loginemail = $_POST['loginemail'];
$password = $_POST['password'];

//database connection
$conn =new mysqli('localhost','root','','leaf_db');
if($conn->connect_error){
  die("Failed to connect:".$conn->connect_error);
}
else{
  $stmt = $conn ->prepare("select * from signup where email= ? ");
  $stmt ->bind_param("s", $loginemail);
  $stmt ->execute();
  $stmt_result = $stmt->get_result();
  if($stmt_result->num_rows>0)
  {
    $data = $stmt_result->fetch_assoc();
      if($data['password'] === $password)
      {
      echo '<script>alert ("login successful")</script>';
      header('Location: login_success.html');
      }
      else
      {
        echo '<script>alert("Wrong password")</script>';
      }
  }
  else
  {
    echo '<script>alert("Invalid email !!!")</script>';
  }
}
 ?>
