<?php
require 'db_con.php';
?>

<?php
/* User login process, checks if user exists and password is correct   */
 $email = $_POST['email'];
 $password = $_POST['password'];
 $res = mysqli_query($con, "SELECT * FROM user WHERE email='$email'");
 $user = mysqli_fetch_assoc($res);
 $check =  $user['password'];

if ( mysqli_num_rows($res) == 0 ){ // User doesn't exist
	$_SESSION['status'] = "User with that email doesn't exist!";
	$_SESSION['status_code'] = "error";
	header("location: login.php"); 
}
else {
	if ( $password == $check) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['password'] = $user['password'];
        // set customer ID in session
        $_SESSION['sessCustomerID'] = $user['id'];
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;
        if ($_SESSION['email']==="admin@kips.com") {
          header("location: admin.php");
        }
        else{
          header("location: Userdash.php");
         
	  }
    }
    else {
		$_SESSION['status'] = "You have entered wrong password, try again!";
		$_SESSION['status_code'] = "error";
		header("location: login.php");
    }
 }
?>

