

<?php
session_start();

$con = mysqli_connect('localhost','root','','leaf_db');

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$s = "select * from signup where email='$email'";

$result= mysqli_query($con,$s);

$num= mysqli_num_rows($result);

if($num==1){
  echo "<h1>Email Already registered. Please <a href=loginSQL.html>login</a></h1>";
}
elseif($_POST["password"]!==$_POST["cpassword"]){
  die('<h2>Password and confirm password should match !!</h2>');
}
else{
  $reg="insert into signup(firstName, lastName,email,phone,password)values('$firstName','$lastName','$email','$phone','$password')";
  mysqli_query($con,$reg);
  echo "Registration successful";
  header('Location: registration_success.html');
}

 ?>
