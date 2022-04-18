<?php
error_reporting(0);
require'db_con.php';
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$opwd = $_POST['opwd'];
	$npwd = $_POST['npwd'];
	$retypepwd = $_POST['retypepwd'];
	$query = mysqli_query($con, "SELECT email, password, cpassword FROM user WHERE email = '$email' AND password = '$opwd' ");
	$num = mysqli_fetch_array($query);
	if($email == $_SESSION['email'] OR $num['email'] ){
	if($num > 0){
		$up = mysqli_query($con, "UPDATE user SET password = '$npwd', cpassword = '$npwd' WHERE email = '$email'");
		$_SESSION['status'] = "Password Change Successfully";
		$_SESSION['status_code'] = "success";
		header("location: login.php");
		
	}else{
		$_SESSION['status'] = "Password does not match";
		$_SESSION['status_code'] = "error";
	}
	}else{
		$_SESSION['status']= "Please Enter Registerd Email!";
		$_SESSION['status_code'] = "error";
		
	}
}
?>

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
    <title>forget</title>
</head>

<body>
    <img src="img\kips_logo.png" class="logo-size" alt="..." style="margin-top: 0px;">
    <div class="container-fluid pwd-block">
        <div class="pwd-branding " style="width: 60%;">
            <img src="img\Kips_stand.png" alt="" class="img-fluid kips-stand-img">
        </div>
        <div class="container-fluid forget-pwd shadow mr-5" style="width: 22%; ">
            <form autocomplete="off" method="POST" action="">
                <div class=" ">

                    <h4 class="pwd-txt mt-2 mb-3 text-center text-info ">Change Password</h4>

                </div>

                <div class=" ">
                    <input type="email " name="email" class="form-control mt-2" id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Register Email " required>
                </div>
                <div class=" ">
                    <input type="password" name="opwd" class="form-control  mt-2 mb-2" id="exampleInputPassword1 " placeholder="Old password" required>
                </div>
                <div class=" ">
                    <input type="password" name="npwd" class="form-control  mb-2 " id="exampleInputPassword1 " placeholder="New password" required>
                </div>
                <div class=" ">
                    <input type="password" name="retypepwd" class="form-control  mb-2 " id="exampleInputPassword1 " placeholder="Re-type New password" required>
                </div>

                <div class="mt-3 mb-2">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
			</form>
        </div>
    </div>


    <script src=" https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js "></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/alert.js" type="text/javascript"></script>
    <?php
		if(isset($_SESSION['status']) AND !empty($_SESSION['status'])){
			?>
			 <script>
				swal({
						title:" <?php echo $_SESSION['status'] ?>",
						//text: "You clicked the button!",
						icon: "<?php echo $_SESSION['status_code'] ?>",
						button: "OK. Done!",
					});
			 </script>
			<?php
			unset($_SESSION['status']);	
		}
    ?>
</body>

</html>




