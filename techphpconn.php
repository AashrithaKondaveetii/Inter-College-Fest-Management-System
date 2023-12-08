<?php
include('techdataconn.php');

$firstname=$_GET['first_name'];
$lastname=$_GET['last_name'];
$email=$_GET['email'];
$regno=$_GET['regno'];
$acode=$_GET['area_code'];
$phone=$_GET['phone'];
$college=$_GET['college'];
$gender=$_GET['radio'];
$payment=$_GET['radio1'];
// $file = addslashes(file_get_contents($_FILES["file-ip-1"]["tmp_name"]));

$cb=$_GET['check'];

foreach ($cb as $cbox){ 
    
if($cbox=="AI/ML Workshop"){
$insert = mysqli_query($db,"INSERT INTO aimlwork VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");	
}
if($cbox=="Hackathon"){
$insert = mysqli_query($db,"INSERT INTO hackathon VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="CyberSecurity Workshop"){
$insert = mysqli_query($db,"INSERT INTO cyberwork VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="Pubg"){
$insert = mysqli_query($db,"INSERT INTO pubg VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="Python Coding"){
$insert = mysqli_query($db,"INSERT INTO pythoncode VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="CS Go"){
$insert = mysqli_query($db,"INSERT INTO csgo VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="Coding"){
$insert = mysqli_query($db,"INSERT INTO coding VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
}
if($cbox=="Valorant"){
$insert = mysqli_query($db,"INSERT INTO valorant VALUES ('$firstname','$lastname','$email','$regno','$acode','$phone','$college','$gender','$payment')");
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



