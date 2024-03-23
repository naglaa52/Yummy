<?php 
$fname=$_POST["fname"]; 
$email=$_POST["email"]; 
$adr=$_POST["adr"]; 
$city=$_POST["city"]; 
$phone_no=$_POST["phone"]; 
$ccnum=$_POST["ccnum"]; 
$con=mysqli_connect("localhost:3309","root","","checkout");
$stmt =$con->prepare("insert into products (fname,email,adr,city,phone_no,ccnum) values(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss",$fname,$email,$adr,$city,$phone_no,$ccnum); 
echo "payment is done";
$stmt->execute();
          ?>