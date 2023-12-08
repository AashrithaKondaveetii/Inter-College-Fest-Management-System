<?php
include('sportsdataconn.php');

$firstname=$_GET['first_name'];
$lastname=$_GET['last_name'];
$email=$_GET['email'];
$regno=$_GET['regno'];
$acode=$_GET['area_code'];
$phone=$_GET['phone'];
$college=$_GET['college'];
$gender=$_GET['radio'];
$payment=$_GET['radio1'];
$img = $_FILES['image']['img'];
$temp_name = $_FILES['image']['temp_name'];

$cb=$_GET['check'];

foreach ($cb as $cbox){ 
    
if($cbox=="Boys Basketball"){
$insert = mysqli_query($db,"INSERT INTO bbasket VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");	
}
if($cbox=="Girls Basketball"){
$insert = mysqli_query($db,"INSERT INTO gbasket VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="Cricket"){
$insert = mysqli_query($db,"INSERT INTO cricket VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="Boys Volleyball"){
$insert = mysqli_query($db,"INSERT INTO bvolley VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="Girls Volleyball"){
$insert = mysqli_query($db,"INSERT INTO gvolley VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="Football"){
$insert = mysqli_query($db,"INSERT INTO football VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="Throwball"){
$insert = mysqli_query($db,"INSERT INTO throwball VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="Table Tennis"){
$insert = mysqli_query($db,"INSERT INTO tabletennis VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="Boys Chess"){
$insert = mysqli_query($db,"INSERT INTO bchess VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="Girls Chess"){
$insert = mysqli_query($db,"INSERT INTO gchess VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}

}

if(move_uploaded_file($temp_name,$img))
{
	echo "Image is Uploaded";
	echo "<img src='$img'";
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

