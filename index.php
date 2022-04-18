<?php
require 'db_con.php';
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
    <title>Login</title>
 
</head>

<body>
	<script src="js/rightclick.js" type="text/javascript"></script>
    <img src="img\logo.png" class="logo-size" alt="..." style="margin-top: 0px;">
    <img src="img\logo1.png" class="float-end logo-size" alt="..." style="margin-top: 0px;">
    <div class="container-fluid login-block">
        <div class="login-branding " style="width: 60%;">
            <img src="img\Kips_stand.png" alt="" class="img-fluid kips-stand-img">
        </div>
        <div class="container-fluid login-blk shadow mr-5" style="width: 22%; ">
			<form autocomplete="off" method="POST" action="Login_script.php">
				<div class=" ">

                    <h4 class=" mt-2 mb-3 text-center text-info ">Login</h4>

                </div>
            <div class=" ">
                <input type="email " class="form-control mt-2 mb-2 " id="exampleInputEmail1 " aria-describedby="emailHelp " name="email" placeholder="Email " required>
               
            </div>
            <div class=" ">
               <input type="password" class="form-control " id="exampleInputPassword1 " name="password" placeholder="Password " required>
            </div>

            <div class="mt-2 mb-2">
                <button type="submit" class="btn btn-primary btn-block" name="submits">Submit</button>
            </div>
            <center><a href="forget_password.php" class="mb-0" style="color: #170acf;">Forgotten password?</a></center>
            <hr>
            <a href="registration.php" class="btn btn-success btn-block mb-2">Register</a>

        </form>
            

        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js "></script>
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
