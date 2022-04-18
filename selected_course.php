<?php
require 'db_con.php';
error_reporting(0);
if(isset($_SESSION['email'])){
	$query = mysqli_query($con,"SELECT * from user WHERE email='$_SESSION[email]'");
	$row = mysqli_fetch_array($query);
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Your Courses</title>
</head>

<body>
<header>
	<!--<img src="img\logo.png" class="logo-size" alt="..." style="margin-top: 0px;">-->
	<nav class="navbar navbar-expand-lg navbar-inverse shadow-sm " style="margin-bottom:0; background: -webkit-linear-gradient(left, #a0b9f3, #7ff5c8); border: none;" >
		<a class="navbar-brand " href="#">KIPS</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#mynav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
            <span class="icon-bar"></span>
		</button>
        <div class="collapse navbar-collapse " id="mynav" bg-light>
			
			<div class="navbar-nav navbar-right">
				<li class="nav-item">
					<a class=" navbar-brand" href="profile_show.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Welcome <?php echo $row['firstname']; ?></a>
					<li class="nav-item dropdown">
					<a class="navbar-brand nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right: 30px;">
					</a>
					
					<div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
						<a class="dropdown-item text-dark" href="logout.php" style="background: ;" ><span class="glyphicon glyphicon-log-out"></span>  Sign out</a>
                    </div>
				</li>
			</div>
		</div>
	</nav>
</header>
   
    <center>
        <div class="course-top-img mt-1" style="margin-left:0;">
            <img src="img\courses.png" alt="" class="img-fluid">
        </div>
    </center>

    <center>
	<?php
	if(isset($_SESSION['email'])){
	$sql = mysqli_query($con,"SELECT course from user WHERE email='$_SESSION[email]'");
	$row = mysqli_fetch_array($sql);
	}
	$temp = $row['course'];
	?>
       <div class="container-fluid course-block mt-5 ">
            <div class="row" style="height: 30%; width: 75%;">
				<?php
						if($temp[0] == 1 or $temp[1] == 1 or $temp[2] == 1 or $temp[3] == 1){?>
							<div class="col-md-4">
								<div class="thumbnail" style="background: transparent; border: none">
									<img src="img\triple_c.png" alt="" class="">
									<div class="caption">
										<!--<p class="text-center" style="font-size: 18.9px; font-weight: bold;">Course On Computer Concept</p>-->
										<a href="#" class="btn btn-block btn-success text-lg mt-5">Quiz</a>
									</div>
								</div>
							</div>
							
					<?php	}
						if($temp[0] == 2 or $temp[1] == 2 or $temp[2] == 2 or $temp[3] == 2){ ?>
							<div class="col-md-4">
								<div class="thumbnail" style="background: transparent; border: none">
									<img src="img\OLevel_c.png" alt="" class="mb-3">
									<div class="caption">
										<!--<p class="text-center" style="font-size: 14px; font-weight: bold;">O Level</p>-->
										<a href="#" class="btn btn-block btn-success text-lg">Quiz</a>
									</div>
								</div>
							</div>
						<?php
						}
						if($temp[0] == 3 or $temp[1] == 3 or $temp[2] == 3 or $temp[3] == 3){ ?>
							 <div class="col-md-4">
								<div class="thumbnail" style="background: transparent; border: none">
									<img src="img\dca_c.png" alt="" class="mb-3">
									<div class="caption">
										<!-- <p class="text-center " style="font-size: 15px; font-weight: bold;">Diploma Of Computer Application</p>-->
										<a href="#" class="btn btn-block btn-success text-lg">Quiz</a>
									</div>
								</div>
							</div>
						<?php	
						}
				?>
                 
            </div>
        </div>
    </center>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js "></script>
</body>

</html>

