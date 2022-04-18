<?php
	session_start();
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
    <title>Error</title>
</head>

<body>
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js "></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="alert.js" type="text/javascript"></script>
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
		if($_SESSION['status_code'] == "success"){
				header("location: login.php");
		}else{
				header("location: registration.php");
		}
				
    ?>
</body>

</html>

