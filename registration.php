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
    <title>Registration</title>    
</head>
<style>
    label {
        font-weight: 5px;
    }
</style>

<body>
	
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
    <img src="img\kips_text.png" class="logo-size" alt="..." style="margin-top: 0px; height: 50px;">
    <img src="img\kips_logo.png" class="logo-size float-end" alt="..." style="margin-top: 0px;">
    <div class=" container-fluid pack2 shadow-lg " style="width: 55%;">
		<h2 class="text-center text-info mb-4 ">Registration</h2>
        <form class="row g-3" method="POST" action="Registration_script.php">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="First name"   name="firstname" required>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Last name"  name="lastname" required>
            </div>

            <div class="col-md-6">
                <input type="email" class="form-control"  name="email" placeholder="Email" required>
            </div>
            <div class="col-md-6">
				<select class="form-select" name="inst" required>
					<option selected disabled>Institute</option>
					<option>KIPS</option>
					
              </select>
            </div>
            <div class="col-md-6">
                <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password" required>
            </div>
            <div class="col-md-6"> 
                <input type="password" class="form-control" id="inputPassword4" name="cpassword" placeholder="Confirm Password" required>
            </div>
            
            <div class="col-md-6">
                <input type="number" class="form-control" id="inputAddress"   name="contact" placeholder="Contact" data-mask="0000000000" required>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" id="inputCity"  name="city"  placeholder="City"required>
            </div>
           
            
            <div class="col-md-12">
                <hr>
            </div>
            <div class="col-md-3">
                <label class="form-label"> Select Courses</label>
            </div>

            <div class="col-md-3" aria-required="true">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" name="course_name[]" value="1">
                    <label class="form-check-label" for="gridCheck">
                  CCC
                </label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck"name="course_name[]" value="2">
                    <label class="form-check-label" for="gridCheck">
                  'O' Level
                </label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck"name="course_name[]" value="3">
                    <label class="form-check-label" for="gridCheck">
                  DCA
                </label>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-success float-end mb-2" name="submits">Register</button>
            </div>
        </form>
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
