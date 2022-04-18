<?php
require 'db_con.php';
if(isset($_SESSION['email'])){
	$query = mysqli_query($con,"SELECT * from user WHERE email='$_SESSION[email]'");
	$row = mysqli_fetch_array($query);
	
}
if(isset($_POST['submits'])){
		header('location: Userdash.php?q=1');
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
	<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
	<script src="js/jquery.js" type="text/javascript"></script>
	
	
	<script src="js/bootstrap.min.js"  type="text/javascript"></script>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'> 
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">-->
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="icon" href="img\kips_text.png" type="image/icon type">
    <!---<link rel="stylesheet" href="http://127.0.0.1:5500/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
    <title><?php
		if (@$_GET['q'] == 1){
			echo 'Home';
		}
		if (@$_GET['q'] == 2){
			echo 'History';
		}
      ?> - <?php echo $row['firstname']; ?>
     </title>
     <style>
		.visual{
			background-color: red;
		}
     </style>
     
     

     
     
</head>

<body>




<!------------------------------------------------------------------------------------------------------------------------------------->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="http://kipscollege.in/">
        <img alt="Brand" src="img\kips_logo.png" width="30" height="24">
      </a>
      <a class="navbar-brand" href="http://kipscollege.in/">KIPS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php
					if (@$_GET['q'] == 1)
						echo 'class="active"';
					?> ><a href="Userdash.php?q=1" class="nav-link">&nbsp;Home<span class="sr-only">(current)</span></a></li>
							<li <?php
					if (@$_GET['q'] == 2)
						echo 'class="active"';
					?>><a href="Userdash.php?q=2" class="nav-link"></span>&nbsp;My History</a></li>
						
      </ul>
      <ul class="nav navbar-nav navbar-right">
		  <li><a href=#"><span class="glyphicon glyphicon-user"></span>&nbsp;Welcome <?php echo $row['firstname']; ?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Update Profile</a></li>
          
            <li role="separator" class="divider"></li>
            <li><a href="logout.php" ><span class="glyphicon glyphicon-log-out"></span>&nbsp; Sign out</a></li>
          </ul>
        </li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!------------------------------------------------------------------------------------------------------------------------------------->
   
    
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>

    <div class="container">
        <div class="row">
            <div class="col-md-12">		
				<?php
				
				if (@$_GET['q'] == 0){
echo '</table></div><div class="" style="padding-top:1px;padding-left:15%;padding-right:15%;word-wrap:break-word">
<h3 align="center" style="font-family:calibri">:: General Instructions ::</h3><br /><ul type="circle">
<font style="font-size:14px;font-family:calibri">';
    $file = fopen("instructions.txt", "r");
    while (!feof($file)) {
        echo '<li>';
        $string = fgets($file);
        $num    = strlen($string) - 1;
        $c      = str_split($string);
        for ($i = 0; $i < $num; $i++) {
            $last = $c[$i];
            if ($c[$i] == ' ' && $last == ' ') {
                echo '&nbsp;';
            } else {
                echo $c[$i];
            }
        }
        echo "</li><br />";
    }
    
    fclose($file);
	
    echo '</font></ul>
    <form method="POST" action="">
		
		<input class="form-check-input" type="checkbox" id="gridCheck" name="check" value="true" style="margin-left:30px " required> I agree, I have read all terms and conditions which are given above.
		<br>
		<br>
		<button type="submit" class="btn btn-success" name="submits" style="margin-left: 400px;"> Proceed</button> 
	</form>
	 
    
    </div>';
    
			
					}
if (@$_GET['q'] == 1) {
    
			
    $result = mysqli_query($con, "SELECT * FROM quiz WHERE status = 'enabled' ORDER BY date DESC") or die('Error');
    echo '<div class="panel mt-4">
		<table class="table table-striped title1"  style="vertical-align:middle">
			<tr>
				<td style="vertical-align:middle"><b>S.N.</b></td>
				<td style="vertical-align:middle"><b>Name</b></td>
				<td style="vertical-align:middle"><b>Total question</b></td>
				<td style="vertical-align:middle"><b>Correct Answer</b></td>
				<td style="vertical-align:middle"><b>Wrong Answer</b></td>
				<td style="vertical-align:middle"><b>Total Marks</b></td>
				<td style="vertical-align:middle"><b>Time limit</b></td>
				<td style="vertical-align:middle"><b>Action</b></td>
			</tr>';
    $c = 1;
    
    while ($row = mysqli_fetch_array($result)) {
        $title   = $row['title'];
        $total   = $row['total'];
        $correct = $row['correct'];
        $wrong   = $row['wrong'];
        $time    = $row['time'];
        $eid     = $row['eid'];
        
        $q12 = mysqli_query($con, "SELECT score FROM history WHERE eid='$eid' AND email='$_SESSION[email]'") or die('Error98');
        $rowcount = mysqli_num_rows($q12);
        if ($rowcount == 0) {
            echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '</td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">+' . $correct . '</td><td style="vertical-align:middle">-' . $wrong . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle">' . $time . '&nbsp;min</td>
  <td style="vertical-align:middle"><b><a href="Userdash.php?q=quiz&step=2&eid=' . $eid . '&n=1&t=' . $total . '&start=start" class="btn" style="color:#FFFFFF;background:darkgreen;font-size:12px;padding:7px;padding-left:10px;padding-right:10px"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span><b>Start</b></span></a></b></td></tr>';
        } else {
            $q = mysqli_query($con, "SELECT * FROM history WHERE email='$_SESSION[email]' AND eid='$eid' ") or die('Error197');
            while ($row = mysqli_fetch_array($q)) {
                $timec  = $row['timestamp'];
                $status = $row['status'];
            }
            $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$eid' ") or die('Error197');
            while ($row = mysqli_fetch_array($q)) {
                $ttimec  = $row['time'];
                $qstatus = $row['status'];
            }
            $remaining = (($ttimec * 60) - ((time() - $timec)));
            if ($remaining > 0 && $qstatus == "enabled" && $status == "ongoing") {
                echo '<tr style="color:darkgreen"><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">+' . $correct . '</td><td style="vertical-align:middle">-' . $wrong . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle">' . $time . '&nbsp;min</td>
  <td style="vertical-align:middle"><b><a href="Userdash.php?q=quiz&step=2&eid=' . $eid . '&n=1&t=' . $total . '&start=start" class="btn" style="margin:0px;background:darkorange;color:white">&nbsp;<span class="title1"><b>Continue</b></span></a></b></td></tr>';
            } else {
                echo '<tr style="color:darkgreen"><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">+' . $correct . '</td><td style="vertical-align:middle">-' . $wrong . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle">' . $time . '&nbsp;min</td>
  <td style="vertical-align:middle"><b><a href="Userdash.php?q=result&eid=' . $eid . '" class="btn" style="margin:0px;background:darkred;color:white">&nbsp;<span class="title1"><b>View Result</b></span></a></b></td></tr>';
            }
        }
    }
    $c = 0;    
}
?>
<?php

if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2 && isset($_SESSION['6e447159425d2d']) && $_SESSION['6e447159425d2d'] == "6e447159425d2d" && isset($_GET['endquiz'])== 'end') {
    unset($_SESSION['6e447159425d2d']);
    $q = mysqli_query($con, "UPDATE history SET status='finished' WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
        $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$_GET[eid]' AND email='$_SESSION[email]'") or die('Error156');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $scorestatus = $row['score_updated'];
                    $email   = $_SESSION['email'];
                }
                 if($scorestatus=="false"){
                    $q = mysqli_query($con, "UPDATE history SET score_updated='true' WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
                    $q = mysqli_query($con, "SELECT * FROM rank WHERE email='$_SESSION[email]'") or die('Error161');
                    $rowcount = mysqli_num_rows($q);
                    if ($rowcount == 0) {
                        $q2 = mysqli_query($con, "INSERT INTO rank VALUES(NULL,'$_SESSION[email]','$s',NOW())") or die('Error165');
                    } else {
                        while ($row = mysqli_fetch_array($q)) {
                            $sun = $row['score'];
                        }
                        
                        $sun = $s + $sun;
                        $q = mysqli_query($con, "UPDATE rank SET score=$sun ,time=NOW() WHERE email= '$_SESSION[email]'") or die('Error174');
                    }
                }
            header('location:Userdash.php?q=result&eid=' . $_GET['eid']);
}

if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2 && isset($_GET['start']) && $_GET['start'] == "start" && (!isset($_SESSION['6e447159425d2d']))) {
    $q = mysqli_query($con, "SELECT * FROM history WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
    if (mysqli_num_rows($q) > 0) {
        $q = mysqli_query($con, "SELECT * FROM history WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
        while ($row = mysqli_fetch_array($q)) {
            $timel  = $row['timestamp'];
            $status = $row['status'];
        }
        $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$_GET[eid]' ") or die('Error197');
        while ($row = mysqli_fetch_array($q)) {
            $ttimel  = $row['time'];
            $qstatus = $row['status'];
        }
        $remaining = (($ttimel * 60) - ((time() - $timel)));
        if ($status == "ongoing" && $remaining > 0 && $qstatus == "enabled") {
            $_SESSION['6e447159425d2d'] = "6e447159425d2d";
            header('location:Userdash.php?q=quiz&step=2&eid=' . $_GET['eid'] . '&n=' . $_GET['n'] . '&t=' . $_GET['t']);
            
        } else {
                $q = mysqli_query($con, "UPDATE history SET status='finished' WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
        $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$_GET[eid]' AND email='$_SESSION[email]'") or die('Error156');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $scorestatus = $row['score_updated'];
                }
                 if($scorestatus=="false"){
                    $q = mysqli_query($con, "UPDATE history SET score_updated='true' WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
                    $q = mysqli_query($con, "SELECT * FROM rank WHERE email='$_SESSION[email]'") or die('Error161');
                    $rowcount = mysqli_num_rows($q);
                    if ($rowcount == 0) {
                        $q2 = mysqli_query($con, "INSERT INTO rank VALUES(NULL,'$_SESSION[email]','$s',NOW())") or die('Error165');
                    } else {
                        while ($row = mysqli_fetch_array($q)) {
                            $sun = $row['score'];
                        }
                        
                        $sun = $s + $sun;
                        $q = mysqli_query($con, "UPDATE rank SET score=$sun ,time=NOW() WHERE email= '$_SESSION[email]'") or die('Error174');
                    }
                }
            header('location:Userdash.php?q=result&eid=' . $_GET['eid']);
        }
        
    } else {
        $time = time();
        $q = mysqli_query($con, "INSERT INTO history VALUES(NULL,'$_SESSION[email]','$_GET[eid]' ,'0','0','0','0',NOW(),'$time','ongoing','false')") or die('Error137');
        $_SESSION['6e447159425d2d'] = "6e447159425d2d";
        header('location:Userdash.php?q=quiz&step=2&eid=' . $_GET["eid"] . '&n=' . $_GET["n"] . '&t=' . $_GET["t"]);
    }
}


if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2 && isset($_SESSION['6e447159425d2d']) && $_SESSION['6e447159425d2d'] == "6e447159425d2d") {
    $q = mysqli_query($con, "SELECT * FROM history WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');

    if (mysqli_num_rows($q) > 0) {
        $q = mysqli_query($con, "SELECT * FROM history WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
        while ($row = mysqli_fetch_array($q)) {
            $time   = $row['timestamp'];
            $status = $row['status'];
        }
        $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$_GET[eid]' ") or die('Error197');
        while ($row = mysqli_fetch_array($q)) {
            $ttime   = $row['time'];
            $qstatus = $row['status'];
        }
        $remaining = (($ttime * 60) - ((time() - $time)));
        if ($status == "ongoing" && $remaining > 0 && $qstatus == "enabled") {
            $q = mysqli_query($con, "SELECT * FROM history WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
            while ($row = mysqli_fetch_array($q)) {
                $time = $row['timestamp'];
            }
            $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$_GET[eid]' ") or die('Error197');
            while ($row = mysqli_fetch_array($q)) {
                $ttime = $row['time'];
            }
            $remaining = (($ttime * 60) - ((time() - $time)));
            echo '
       
            <script>
var seconds = ' . $remaining . ' ;
function end(){
  data = prompt("Are you sure to end this Quiz? Remember, once finished, you wont be able to continue anymore and final results will be displayed. If you want to continue then enter \\"yes\\" in the textbox below and press enter");
  if(data=="yes"){
    window.location ="Userdash.php?q=quiz&step=2&eid=' . $_GET["eid"] . '&n=' . $_GET["n"] . '&t=' . isset($_GET["total"]) . '&endquiz=end";
  }
}
function enable(){
  document.getElementById("sbutton").removeAttribute("disabled");

}
function frmreset(){
  document.getElementById("sbutton").setAttribute("disabled","true");
  document.getElementById("qform").reset();
}
    function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    document.getElementById(\'countdown\').innerHTML = minutes + ":" +    remainingSeconds;
    if (seconds <= 0) {
        clearInterval(countdownTimer);
        document.getElementById(\'countdown\').innerHTML = "Buzz Buzz...";
        window.location ="Userdash.php?q=quiz&step=2&eid=' . $_GET["eid"] . '&n=' . $_GET["n"] . '&t=' . isset($_GET["total"]) . '&endquiz=end";
    } else {    
        seconds--;
    }
    }
var countdownTimer = setInterval(\'secondPassed()\', 1000);
</script>';
            echo '
            <div class=" container-fluid " style=" height: fit-content; margin-top: 0px;">
				<div class=""style=" height: fit-content; width: fit-content; float: left;">
				 <font size="3" style="margin-left:0px;font-family:\'typo\' font-size:20px; font-weight:bold;color:darkred">Time Left : </font><span class="timer btn btn-default" style="margin-left:20px;">
					<font style="font-family:\'typo\';font-size:20px;font-weight:bold;color:darkblue" id="countdown"></font></span>
				</div>
				<div class=""style=" width: fit-content; float: right; margin-top: 5px;">
				
					<span class="timer btn btn-primary" style="" onclick="end()" ><span class=" glyphicon glyphicon-off"></span>&nbsp;&nbsp;
					<font style="font-size:12px;font-weight:bold">Finish Quiz</font></span>
				</div>
            </div>
					';
            $eid   = @$_GET['eid'];
            $sn    = @$_GET['n'];
            $total = @$_GET['t'];
            $q     = mysqli_query($con, "SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' ");
            echo '<div class="panel" style="margin-right:5%;margin-left:5%;margin-top:10px;border-radius:10px">';
            while ($row = mysqli_fetch_array($q)) {
                $qns = stripslashes($row['qns']);
                $qid = $row['qid'];
                echo '<b><pre style="background-color:white">
                <div style="font-size:20px;font-weight:bold;font-family:calibri;margin:10px">' . $sn . ' : ' . $qns . '</div></pre></b>';
            }
            
            echo '<form id="qform" action="update.php?q=quiz&step=2&eid=' . $eid . '&n=' . $sn . '&t=' . $total . '&qid=' . $qid . '" method="POST"  class="form-horizontal">
<br />';
            $q = mysqli_query($con, "SELECT * FROM uanswers WHERE qid='$qid' AND email='$_SESSION[email]' AND eid='$_GET[eid]'") or die("Error222");
            if (mysqli_num_rows($q) > 0) {
                $row = mysqli_fetch_array($q);
                $ans = $row['ans'];
                $q = mysqli_query($con, "SELECT * FROM options WHERE qid='$qid' AND optionid='$ans'") or die("Error222");
                $row = mysqli_fetch_array($q);
                $ans = $row['option'];
            } else {
                $ans = "";
            }
            if (strlen($ans) > 0) {
                echo "<font style=\"color:green;font-size:12px;font-weight:bold\">Selected answer: </font><font style=\"color:#565252;font-size:12px;\">" . $ans . "</font>&nbsp;&nbsp;<a href=update.php?q=quiz&step=2&eid=$eid&n=$sn&t=$total&qid=$qid&delanswer=delanswer><span class=\"glyphicon glyphicon-remove\" style=\"font-size:12px;color:darkred\"></span></a><br /><br />";
            }
            echo '<div class="funkyradio">';
            $q = mysqli_query($con, "SELECT * FROM options WHERE qid='$qid' ");
            while ($row = mysqli_fetch_array($q)) {
                $option   = stripslashes($row['option']);
                $optionid = $row['optionid'];
                echo '<div class="funkyradio-success " style="margin-left: 20px;"><input type="radio" id="' . $optionid . '" name="ans" value="' . $optionid . '" onclick="enable()"> <label for="' . $optionid . '" style="width:50%"><div style="color:black;font-size:12px;word-wrap:break-word">&nbsp;&nbsp;' . $option . '</div></label></div>';
            }
           echo '</div>';
            if ($_GET["t"] > $_GET["n"] && $_GET["n"] != 1) {
                echo '<br /><a href="Userdash.php?q=quiz&step=2&eid=' . $eid . '&n=' . ($sn - 1) . '&t=' . $total . '" class="btn btn-primary" style="height:30px"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"  style="font-size:12px"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-default" disabled="true" id="sbutton" style="height:30px"><span class="glyphicon glyphicon-lock" style="font-size:12px" aria-hidden="true"></span><font style="font-size:12px;font-weight:bold">Confirm Answer</font></button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-default" onclick="frmreset()" style="height:30px"></span><font style="font-size:12px;font-weight:bold">Reset</font></button>&nbsp;&nbsp;&nbsp;&nbsp;<a href="Userdash.php?q=quiz&step=2&eid=' . $eid . '&n=' . ($sn + 1) . '&t=' . $total . '" class="btn btn-primary" style="height:30px"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"  style="font-size:12px"></span><font style="font-size:12px;font-weight:bold">Next</font></a></form><br><br>';
            } else if ($_GET["t"] == $_GET["n"]) {
                echo '<br /><a href="Userdash.php?q=quiz&step=2&eid=' . $eid . '&n=' . ($sn - 1) . '&t=' . $total . '" class="btn btn-primary" style="height:30px"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"  style="font-size:12px"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-default" disabled="true" id="sbutton" style="height:30px"><span class="glyphicon glyphicon-lock" style="font-size:12px" aria-hidden="true"></span><font style="font-size:12px;font-weight:bold"> Confirm Answer</font></button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-default" onclick="frmreset()" style="height:30px"></span><font style="font-size:12px;font-weight:bold">Reset</font></button>&nbsp;&nbsp;&nbsp;&nbsp;</form><br><br>';
            } else if ($_GET["t"] > $_GET["n"] && $_GET["n"] == 1) {
                echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-default" disabled="true" id="sbutton" style="height:30px">
                <span class="glyphicon glyphicon-lock" style="font-size:12px" aria-hidden="true"></span>
                <font style="font-size:12px;font-weight:bold">Confirm Answer</font>
                </button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-default" onclick="frmreset()" style="height:30px">
                </span><font style="font-size:12px;font-weight:bold">Reset</font>
                </button>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="Userdash.php?q=quiz&step=2&eid=' . $eid . '&n=' . ($sn + 1) . '&t=' . $total . '" class="btn btn-primary" style="height:30px">
                </span><font style="font-size:12px;font-weight:bold">Next</font></a>
                <br><br>';
            } else {
            }
            echo '</div>';
            echo '<div class="" style="text-align:center">';
            $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$_GET[eid]'") or die("Error222");
            $i = 1;
            while ($row = mysqli_fetch_array($q)) {
                $ques[$row['qid']] = $i;
                $i++;
            }
            
            $q = mysqli_query($con, "SELECT * FROM uanswers WHERE eid='$_GET[eid]' AND email='$_SESSION[email]'") or die("Error222a");
            $i = 1;?>
			<?php
            while ($row = mysqli_fetch_array($q)) {
				 
                if (isset($ques[$row['qid']])) {
                    $quesans[$ques[$row['qid']]] = true;
                   
                }
            }
            
            for ($i = 1; $i <= $total; $i++) {
				
                echo '<a class="btn  btn-sm btn-q visual" href="Userdash.php?q=quiz&step=2&eid=' . $eid . '&n=' . $i . '&t=' . $total . '"  style="width: 33px; margin-top:1px; margin:5px; background-color:';
				
                if ($quesans[$i]) {
                    echo"green";
               
                } else {
                    echo "darked";
                }
           
                echo '; color: white; font-size:16px;font-family:calibri;border-radius:4px">&nbsp;' . $i . '&nbsp;</a>';
            
            }
        } else {
            unset($_SESSION['6e447159425d2d']);
            $q = mysqli_query($con, "UPDATE history SET status='finished' WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
        $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$_GET[eid]' AND email='$_SESSION[email]'") or die('Error156');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $scorestatus = $row['score_updated'];
                }
                 if($scorestatus=="false"){
                    $q = mysqli_query($con, "UPDATE history SET score_updated='true' WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
                    $q = mysqli_query($con, "SELECT * FROM rank WHERE email='$_SESSION[email]'") or die('Error161');
                    $rowcount = mysqli_num_rows($q);
                    if ($rowcount == 0) {
                        $q2 = mysqli_query($con, "INSERT INTO rank VALUES(NULL,'$_SESSION[email]','$s',NOW())") or die('Error165');
                    } else {
                        while ($row = mysqli_fetch_array($q)) {
                            $sun = $row['score'];
                        }
                        
                        $sun = $s + $sun;
                        $q = mysqli_query($con, "UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE email= '$_SESSION[email]'") or die('Error174');
                    }
                }
            header('location:Userdash.php?q=result&eid=' . $_GET['eid']);
        }
    } else {
        unset($_SESSION['6e447159425d2d']);
        $q = mysqli_query($con, "UPDATE history SET status='finished' WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
        $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$_GET[eid]' AND email='$_SESSION[email]'") or die('Error156');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $scorestatus = $row['score_updated'];
                }
                if($scorestatus=="false"){
                    $q = mysqli_query($con, "UPDATE history SET score_updated='true' WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
                    $q = mysqli_query($con, "SELECT * FROM rank WHERE email='$_SESSION[email]'") or die('Error161');
                    $rowcount = mysqli_num_rows($q);
                    if ($rowcount == 0) {
                        $q2 = mysqli_query($con, "INSERT INTO rank VALUES(NULL,'$_SESSION[email]','$s',NOW())") or die('Error165');
                    } else {
                        while ($row = mysqli_fetch_array($q)) {
                            $sun = $row['score'];
                        }
                        
                        $sun = $s + $sun;
                        $q = mysqli_query($con, "UPDATE rank SET score= $sun , time=NOW() WHERE email= '$_SESSION[email]'") or die('Error174');
                    }
                }
            header('location:Userdash.php?q=result&eid=' . $_GET['eid']);
    }
}
if (@$_GET['q'] == 'result' && @$_GET['eid']) {
    $eid = @$_GET['eid'];
    $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$eid' ") or die('Error157');
    while ($row = mysqli_fetch_array($q)) {
        $total = $row['total'];
    }
    $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND email='$_SESSION[email]' ") or die('Error157');
    
    while ($row = mysqli_fetch_array($q)) {
        $s      = $row['score'];
        $w      = $row['wrong'];
        $r      = $row['correct'];
        $status = $row['status'];
    }
    if ($status == "finished") {
        echo '<div class="panel">
<center><h1 class="title" style="color:#660033">Result</h1><center><br />
<table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';
        echo '<tr style="color:darkblue">
				<td style="vertical-align:middle">Total Questions</td>
				<td style="vertical-align:middle">' . $total . '</td>
			</tr>
		<tr style="color:darkgreen">
			<td style="vertical-align:middle">Correct Answer&nbsp;<span class="glyphicon glyphicon-ok-arrow" aria-hidden="true"></span></td>
			<td style="vertical-align:middle">' . $r . '</td>
		</tr> 
		<tr style="color:red">
			<td style="vertical-align:middle">Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-arrow" aria-hidden="true"></span></td>
			<td style="vertical-align:middle">' . $w . '</td>
		</tr>
		<tr style="color:orange">
			<td style="vertical-align:middle">Unattempted&nbsp;<span class="glyphicon glyphicon-ban-arrow" aria-hidden="true"></span></td>
			<td style="vertical-align:middle">' . ($total - $r - $w) . '</td>
		</tr>
		<tr style="color:darkblue">
			<td style="vertical-align:middle">Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td>
			<td style="vertical-align:middle">' . $s . '</td>
		</tr>';
        $q = mysqli_query($con, "SELECT * FROM rank WHERE  email='$_SESSION[email]' ") or die('Error157');
        while ($row = mysqli_fetch_array($q)) {
            $s = $row['score'];
            echo '<tr style="color:#990000"><td style="vertical-align:middle">Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td style="vertical-align:middle">' . $s . '</td></tr>';
        }
        echo '<tr></tr></table></div><div class="panel"><br /><h3 align="center" style="font-family:calibri">:: Detailed Analysis ::</h3><br /><ol style="font-size:20px;font-weight:bold;font-family:calibri;margin-top:20px">';
        $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$_GET[eid]'") or die('Error197');
        while ($row = mysqli_fetch_array($q)) {
            $question = $row['qns'];
            $qid      = $row['qid'];
            $q2 = mysqli_query($con, "SELECT * FROM uanswers WHERE eid='$_GET[eid]' AND qid='$qid' AND email='$_SESSION[email]'") or die('Error197');
            if (mysqli_num_rows($q2) > 0) {
                $row1         = mysqli_fetch_array($q2);
                $ansid        = $row1['ans'];
                $correctansid = $row1['correctans'];
                $q3 = mysqli_query($con, "SELECT * FROM options WHERE optionid='$ansid'") or die('Error197');
                $q4 = mysqli_query($con, "SELECT * FROM options WHERE optionid='$correctansid'") or die('Error197');
                $row2       = mysqli_fetch_array($q3);
                $row3       = mysqli_fetch_array($q4);
                $ans        = $row2['option'];
                $correctans = $row3['option'];
            } else {
                $q3 = mysqli_query($con, "SELECT * FROM answer WHERE qid='$qid'") or die('Error197');
                $row1         = mysqli_fetch_array($q3);
                $correctansid = $row1['ansid'];
                $q4 = mysqli_query($con, "SELECT * FROM options WHERE optionid='$correctansid'") or die('Error197');
                $row2       = mysqli_fetch_array($q4);
                $correctans = $row2['option'];
                $ans        = "Unanswered";
            }
            if ($correctans == $ans && $ans != "Unanswered") {
                echo '<li><div style="font-size:16px;font-weight:bold;font-family:calibri;margin-top:20px;background-color:lightgreen;padding:10px;word-wrap:break-word;border:2px solid darkgreen;border-radius:10px;">' . $question . ' <span class="glyphicon glyphicon-ok" style="color:darkgreen"></span></div><br />';
                echo '<font style="font-size:14px;color:darkgreen"><b>Your Answer: </b></font><font style="font-size:14px;">' . $ans . '</font><br />';
                echo '<font style="font-size:14px;color:darkgreen"><b>Correct Answer: </b></font><font style="font-size:14px;">' . $correctans . '</font><br />';
            } 
            else if ($ans == "Unanswered") {
                echo '<li><div style="font-size:16px;font-weight:bold;font-family:calibri;margin-top:20px;background-color:#f7f576;padding:10px;word-wrap:break-word;border:2px solid #b75a0e;border-radius:10px;">' . $question . ' </div><br />';
                echo '<font style="font-size:14px;color:darkgreen"><b>Correct Answer: </b></font><font style="font-size:14px;">' . $correctans . '</font><br />';
            } 
            else {
                echo '<li><div style="font-size:16px;font-weight:bold;font-family:calibri;margin-top:20px;background-color:#f99595;padding:10px;word-wrap:break-word;border:2px solid darkred;border-radius:10px;">' . $question . ' <span class="glyphicon glyphicon-remove" style="color:red"></span></div><br />';
                echo '<font style="font-size:14px;color:darkgreen"><b>Your Answer: </b></font><font style="font-size:14px;">' . $ans . '</font><br />';
                echo '<font style="font-size:14px;color:red"><b>Correct Answer: </b></font><font style="font-size:14px;">' . $correctans . '</font><br />';
                
            }
            echo "<br /></li>";
        }
        echo '</ol>';
        echo "</div>";
    } else {
        die("Thats a 404 Error bro. You are trying to access a wrong page");
    }
}

if (@$_GET['q'] == 2) {
    $q = mysqli_query($con, "SELECT * FROM history WHERE email='$_SESSION[email]' AND status='finished' ORDER BY date DESC ") or die('Error197');
    echo '<div class="panel title mt-4">
<table class="table table-striped title1" >
<tr><td style="vertical-align:middle"><b>S.N.</b></td><td style="vertical-align:middle"><b>Quiz</b></td><td style="vertical-align:middle"><b>Total Questions</b></td><td style="vertical-align:middle"><b>Right</b></td><td style="vertical-align:middle"><b>Wrong<b></td><td style="vertical-align:middle"><b>Unattempted<b></td><td style="vertical-align:middle"><b>Score</b></td><td style="vertical-align:middle"><b>Action<b></td></tr>';
    $c = 0;
    while ($row = mysqli_fetch_array($q)) {
        $eid = $row['eid'];
        $s   = $row['score'];
        $w   = $row['wrong'];
        $r   = $row['correct'];
        $q23 = mysqli_query($con, "SELECT * FROM quiz WHERE  eid='$eid' ") or die('Error208');
        while ($row = mysqli_fetch_array($q23)) {
            $title = $row['title'];
            $total = $row['total'];
        }
        $c++;
        echo '<tr><td style="vertical-align:middle">' . $c . '</td><td style="vertical-align:middle">' . $title . '</td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">' . $r . '</td><td style="vertical-align:middle">' . $w . '</td><td style="vertical-align:middle">' . ($total - $r - $w) . '</td><td style="vertical-align:middle">' . $s . '</td><td style="vertical-align:middle"><b><a href="Userdash.php?q=result&eid=' . $eid . '" class="btn" style="margin:0px;background:darkred;color:white">&nbsp;<span class="title1"><b>View Result</b></td></tr>';
    }
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
    
    <script language="javascript">
	 var message="Right Click is not allowed here.";
           function clickIE4(){
                 if (event.button==2){
                     alert(message);
                     return false;
                 }
           }
           function clickNS4(e){
                if (document.layers||document.getElementById&&!document.all){
                        if (e.which==2||e.which==3){
                                  alert(message);
                                  return false;
                        }
                }
           }
           if (document.layers){
                 document.captureEvents(Event.MOUSEDOWN);
                 document.onmousedown=clickNS4;
           }
           else if (document.all&&!document.getElementById){
                 document.onmousedown=clickIE4;
           }
           document.oncontextmenu=new Function("alert(message);return false;")
</script>
<script>
	
document.onkeydown = function (e) {
       return false;
}
</script>

</body>

</html>


