<?php
require 'db_con.php';
if ($_SESSION['logged_in'] != 1 ) {
	$_SESSION['status'] = "You must log in before viewing your Cart page!";
	$_SESSION['status_code'] = "info";
	header("location: login.php");
}
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
    <title>Admin<?php
		if (@$_GET['q'] == 0){
			echo '/Home';
		}
		if (@$_GET['q'] == 1){
			echo '/User';
		}if (@$_GET['q'] == 2){
			echo '/Leaderbord';
		}
		if (@$_GET['q'] == 3){
			echo '/Feedback';
		}if (@$_GET['q'] == 4){
			echo '/AddQuiz';
		}
		if (@$_GET['q'] == 5){
			echo '/RemoveQuiz';
		}
      ?>
     </title>
</head>

<body>


</body>

	 <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <div class="container-fluid">
            <a class="navbar-brand" href="http://kipscollege.in/" style="font-size:20px;">
                <img src="img\kips_logo.png" alt="" width="30" height="24" class="d-inline-block align-center"> KIPS
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					 <li <?php
						if (@$_GET['q'] == 0)
							echo 'class="active"';
						?> class="nav-item"><a href="admin.php?q=0" class="nav-link">Home<span class="sr-only">(current)</span></a></li>
								<li <?php
						if (@$_GET['q'] == 1)
							echo 'class="active"';
						?>><a href="admin.php?q=1" class="nav-link">Users</a></li>
							<li <?php
						if (@$_GET['q'] == 2)
							echo 'class="active"';
						?>><a href="admin.php?q=2" class="nav-link">Leaderboard</a></li>
							<li <?php
						if (@$_GET['q'] == 3)
							echo 'class="active"';
						?>><a href="admin.php?q=3" class="nav-link">Feedback</a></li>
								<li <?php
						if (@$_GET['q'] == 4)
							echo 'class="active"';
						?>><a href="admin.php?q=4" class="nav-link">Add Quiz</a></li>
								<li <?php
						if (@$_GET['q'] == 5)
							echo 'class="active"';
						?>><a href="admin.php?q=5" class="nav-link">Remove Quiz</a></li>
						<li style="margin-left:600px;">
							<a class="nav-link" href="logout.php" >Sign Out</a>
						</li>
				</ul>
				
            </div>
        </div>
         
    </nav>
   
    
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>

    <div class="container mt-5" style="font-size:15px ; font-style:Century Gothic,Times Roman,sans-serif;">
        <div class="row">
            <div class="col-md-12">
                 <?php
    if (@$_GET['q'] == 0) {
        
        $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
        echo '<div class="panel"><table class="table table-striped bg-light" style="vertical-align:middle">
    <tr><td style="vertical-align:middle"><b>S.N.</b></td><td style="vertical-align:middle"><b>Name</b></td><td style="vertical-align:middle"><b>Total question</b></td><td style="vertical-align:middle"><b>Marks</b></td><td style="vertical-align:middle"><b>Time limit</b></td><td style="vertical-align:middle"><b>Status</b></td><td style="vertical-align:middle"><b>Action</b></td></tr>';
        $c = 1;
        while ($row = mysqli_fetch_array($result)) {
            $title   = $row['title'];
            $total   = $row['total'];
            $correct = $row['correct'];
            $time    = $row['time'];
            $eid     = $row['eid'];
            $status  = $row['status'];
            if ($status == "enabled") {
                echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '</td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle">' . $time . '&nbsp;min</td><td style="vertical-align:middle">Enabled</td>
      <td style="vertical-align:middle"><b><a href="update.php?deidquiz=' . $eid . '" class="btn logb" style="color:#FFFFFF;background:#ff0000;font-size:12px;padding:5px;">&nbsp;<span><b>Disable</b></span></a></b></td></tr>';
            } else {
                echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '</td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle">' . $time . '&nbsp;min</td><td style="vertical-align:middle">Disabled</td>
      <td style="vertical-align:middle"><b><a href="update.php?eeidquiz=' . $eid . '" class="btn logb" style="color:#FFFFFF;background:darkgreen;font-size:12px;padding:5px;">&nbsp;<span><b>Enable</b></span></a></b></td></tr>';
                
            }
        }
    }
    
        if (@$_GET['q'] == 1) {  
        $result = mysqli_query($con, "SELECT * FROM user") or die('Error');
        echo '<div class="panel">
        <table class="table table-striped title1">
			<tr>
				<td style="vertical-align:middle"><b>S.N.</b></td>
				<td style="vertical-align:middle"><b>Fisrt Name</b></td>
				<td style="vertical-align:middle"><b>Last Name</b></td>
				<td style="vertical-align:middle"><b>Email</b></td>
				<td style="vertical-align:middle"><b>Contact</b></td>
				<td style="vertical-align:middle"><b>City</b></td>
				<td style="vertical-align:middle"><b>Course</b></td>
				<td style="vertical-align:middle"></td>
			</tr>';
        $c = 1;
        while ($row = mysqli_fetch_array($result)) {
            $firstname = $row['firstname'];
			$lastname = $row['lastname'];
			$email = $row['email'];
			$inst = $row['inst'];
			$contact = $row['contact'];
			$city = $row['city'];
			$course = $row['course'];
            
            echo '<tr>
					<td style="vertical-align:middle">' . $c++ . '</td>
					<td style="vertical-align:middle">' . $firstname . '</td>
					<td style="vertical-align:middle">' . $lastname . '</td>
					<td style="vertical-align:middle">' . $email . '</td>
					<td style="vertical-align:middle">' . $contact . '</td>
					<td style="vertical-align:middle">' . $city . '</td>
					<td style="vertical-align:middle">' . $course . '</td>
					<td style="vertical-align:middle">
						<a title="Delete User" href="update.php?email=' . $email . '" class="btn btn-danger">Trash</a>
					</td>
				 </tr>';
        }
        $c = 0;
        echo '</table></div>';
        
    }
    
     if (@$_GET['q'] == 4 && !(@$_GET['step'])) {
        echo ' <div class="pwd-block" style="margin-top: 70px;">
        <div class="pwd-branding " style="width: 50%;">
            <img src="img\Kips_stand.png" alt="" class="img-fluid kips-stand-img">
        </div>
        <div class="container-fluid forget-pwd shadow mr-1 title1" style="width: 40%;">
            <form autocomplete="off" name="form" action="update.php?q=addquiz"  method="POST" >
                <div class="">

                    <h4 class="pwd-txt mt-2 mb-3 text-center text-info ">Enter Quiz Details</h4>

                </div>

                <div class=" ">
                    <input id="name" name="name" class="form-control  mb-2 mt-2 " placeholder="Enter Quiz title" class="form-control input-md" type="text">
                </div>
                <div class=" ">
                     <input id="total" name="total" class="form-control  mb-2 " placeholder="Enter total number of questions" class="form-control input-md" type="number">
                </div>
                <div class=" ">
                    <input id="right" name="right" class="form-control  mb-2 " placeholder="Enter marks on right answer" class="form-control input-md" min="0" type="number">

                </div>
                <div class=" ">
                    <input id="wrong" name="wrong" class="form-control  mb-2 " placeholder="Enter minus marks on wrong answer without sign" class="form-control input-md" min="0" type="number">
        
                </div>
                <div class=" ">
					 <input id="time" name="time" class="form-control mb-2" placeholder="Enter time limit for test in minute" class="form-control input-md" min="1" type="number">

                </div>

                <div class="mb-2">
                      <input  type="submit"  class="btn btn-primary btn-block" value="Submit" class="btn btn-primary"/>
                </div>

        </div>
    </div>
';
        
        
        
    }
    
    
    
      if (@$_GET['q'] == 4 && (@$_GET['step']) == 2) {
        echo ' 
    <div class="row">
    <span class="title1" style="margin-left:35%;font-size:30px;"><b>Enter Question Details</b></span><br /><br />
     <div class="col-md-3"></div><div class="col-md-6"><form class="form-horizontal title1" name="form" action="update.php?q=addqns&n=' . @$_GET['n'] . '&eid=' . @$_GET['eid'] . '&ch=4 "  method="POST">
    <fieldset>
    ';
        
        for ($i = 1; $i <= @$_GET['n']; $i++) {
            echo '<b>Question number&nbsp;' . $i . '&nbsp;:</><br /><!-- Text input-->
    <div class="form-group">
      <label class="col-md-12 control-label" for="qns' . $i . ' "></label>  
      <div class="col-md-12">
      <textarea rows="3" cols="5" name="qns' . $i . '" class="form-control" placeholder="Write question number ' . $i . ' here..."></textarea>  
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-12 control-label" for="' . $i . '1"></label>  
      <div class="col-md-12">
      <input id="' . $i . '1" name="' . $i . '1" placeholder="Enter option a" class="form-control input-md" type="text">
        
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-12 control-label" for="' . $i . '2"></label>  
      <div class="col-md-12">
      <input id="' . $i . '2" name="' . $i . '2" placeholder="Enter option b" class="form-control input-md" type="text">
        
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-12 control-label" for="' . $i . '3"></label>  
      <div class="col-md-12">
      <input id="' . $i . '3" name="' . $i . '3" placeholder="Enter option c" class="form-control input-md" type="text">
        
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-12 control-label" for="' . $i . '4"></label>  
      <div class="col-md-12">
      <input id="' . $i . '4" name="' . $i . '4" placeholder="Enter option d" class="form-control input-md" type="text">
        
      </div>
    </div>
    <br />
    <b>Correct answer</b>:<br />
    <select id="ans' . $i . '" name="ans' . $i . '" placeholder="Choose correct answer " class="form-control input-md" >
       <option value="a">Select answer for question ' . $i . '</option>
      <option value="a">option a</option>
      <option value="b">option b</option>
      <option value="c">option c</option>
      <option value="d">option d</option> </select><br /><br />';
        }
        
        echo '<div class="form-group">
      <label class="col-md-12 control-label" for=""></label>
      <div class="col-md-12"> 
        <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
      </div>
    </div>
    
    </fieldset>
    </form></div>';
        
        
        
    }
    if (@$_GET['q'] == 5) {
        
        $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
        echo '<div class="panel"><table class="table table-striped title1">
    <tr><td style="vertical-align:middle"><b>S.N.</b></td><td style="vertical-align:middle"><b>Topic</b></td><td style="vertical-align:middle"><b>Total question</b></td><td style="vertical-align:middle"><b>Marks</b></td><td style="vertical-align:middle"><b>Time limit</b></td><td style="vertical-align:middle"><b>Action</b></td></tr>';
        $c = 1;
        while ($row = mysqli_fetch_array($result)) {
            $title   = $row['title'];
            $total   = $row['total'];
            $correct = $row['correct'];
            $time    = $row['time'];
            $eid     = $row['eid'];
            echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '</td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle">' . $time . '&nbsp;min</td>
      <td style="vertical-align:middle"><b><a href="update.php?q=rmquiz&eid=' . $eid . '" class="btn" style="margin:0px;background:red;color:white">&nbsp;<span class="title1"><b>Remove</b></span></a></b></td></tr>';
        }
        $c = 0;
        echo '</table></div>';
        
    }
    
    
		?>
            </div>
        </div>
    </div>




<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>


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

