<?php
include('culturaldataconn.php');

$firstname=$_GET['first_name'];
$lastname=$_GET['last_name'];
$email=$_GET['email'];
$regno=$_GET['regno'];
$acode=$_GET['area_code'];
$phone=$_GET['phone'];
$college=$_GET['college'];
$gender=$_GET['radio'];
$payment=$_GET['radio1'];

$cb=$_GET['check'];

foreach ($cb as $cbox){ 
    
if($cbox=="Girls Solo Singing"){
$insert = mysqli_query($db,"INSERT INTO gsolosing VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");	
}
if($cbox=="Boys Solo Singing"){
$insert = mysqli_query($db,"INSERT INTO bsolosing VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="Girls Solo Dance"){
$insert = mysqli_query($db,"INSERT INTO gsolodan VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="Boys Solo Dance"){
$insert = mysqli_query($db,"INSERT INTO bsolodan VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="Drama"){
$insert = mysqli_query($db,"INSERT INTO drama VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="Band Perfomance"){
$insert = mysqli_query($db,"INSERT INTO bandperfo VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="Group Dance"){
$insert = mysqli_query($db,"INSERT INTO grpdan VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="Fashion Show"){
$insert = mysqli_query($db,"INSERT INTO fashionshow VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}

}

$fname = $_GET['first_name'];
$lname = $_GET['last_name'];
$email= $_GET['email'];
$regno = $_GET['regno'];
$phone= $_GET['phone'];
$college = $_GET['college'];
$gender = $_GET['radio'];
$events = $_GET['check[]'];
$payment = $_GET['radio1'];

$to = $email;
$subject = "Confirmation Cultural Fest Events";
$txt ="First Name = ". $fname . "\r\nLast Name = " . $lastname . "\r\nEmail = " . $email . "\r\nReg.No. = " . $regno . "\r\nPhone = " . $phone . "\r\nCollege = " . $college . "\r\nGender = " . $gender . "\r\nEvents = " . $events . "\r\nPayment Mode = " . $payment;
$headers = "From: srmap@gmail.com" . "\r\n" .

"CC: admin@srmap.edu.in";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

mysqli_close($db);
?>

<?php

echo "<script>
alert('Registered successfully');
window.location.href='http://localhost/SE/home.html';
</script>";

?>

