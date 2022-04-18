<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img\kips_text.png" type="image/icon type">
    <link rel="stylesheet" href="http://127.0.0.1:5500/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Error</title>
</head>

<body>

<?php
require 'db_con.php';
?>

<?php
if(isset($_POST['submits']))
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$inst = $_POST['inst'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$course_name = $_POST['course_name'];
//$course = implode(',', $course_name);
foreach($_POST['course_name'] as $_subcat){
	$checksub[] = $_subcat;
	$course = implode('', $checksub);
}
}
if($password === $cpassword)
{
//email already exist in a database
$res = mysqli_query($con, "SELECT * FROM user WHERE email = '$email'") or die(mysqli_error($con));
if (mysqli_num_rows($res) > 0 ) {
	 $_SESSION['status']="User with this email already exists!";
	 $_SESSION['status_code']="info";
     header("location: registration.php");
}
else { // Email doesn't already exist in a database, proceed...

    $sql="INSERT INTO user(firstname, lastname, email, inst, password, cpassword, contact, city, course) VALUES ('$firstname', '$lastname', '$email', '$inst', '$password', '$cpassword', '$contact', '$city', '$course')";
    if ( mysqli_query($con,$sql) ){

        $_SESSION['active'] = 1; 
        $_SESSION['logged_in'] = true;
        $q = mysqli_query($con,"SELECT * FROM user WHERE email='$email'");
        $user = $q->fetch_assoc();
		$_SESSION['status'] = "Successfully Registerd!";
		$_SESSION['status_code'] = "success";
		header("location: login.php"); 
    }
    else {
		$_SESSION['status'] = "Registration failed!";
		$_SESSION['status_code'] = "error";
		$_SESSION['location'] = "registration.php";
		header("location: registration.php"); 
    }
}
}else{
		$_SESSION['status'] = "Password Did not Match!";
		$_SESSION['status_code'] = "error";
		$_SESSION['location'] = "registration.php";
		header("location: registration.php");  
}

?>

