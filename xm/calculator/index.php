<?php
if (isset($_POST['Calculate'])) {
	$fn=$_POST['first_number'];
	$sn=$_POST['second_number'];
	$operation=$_POST['Calculate'];

	if($operation=="/" && ($fn == 0 || $sn == 0)){
		$error = "Never divide any number by zero";
	}
	else{
		if($operation=="+")
			$result=$fn+$sn;
		else if($operation=="-")
			$result=$fn -$sn;
		else if($operation=="x")
			$result=$fn*$sn;
		else if($operation=="/")
			$result=$fn/$sn;
	}
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Calculator in PHP</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
<style>
body {
	color: #fff;
	background: #3598dc;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 41px;
	background: #f2f2f2;
	box-shadow: none !important;
	border: none;
}
.form-control:focus {
	background: #e2e2e2;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 600px;
	margin: 30px auto;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form h2  {
	color: #333;
	font-weight: bold;
	margin-top: 0;
}
.signup-form hr  {
	margin: 0 -30px 20px;
}    
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;
	background: #3598dc;
	border: none;
	min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #2389cd !important;
	outline: none;
}
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #3598dc;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}
.signup-form .hint-text  {
	padding-bottom: 15px;
	text-align: center;
}
</style>
</head>
<body>
<div class="signup-form">
    <form  method="post">
		<h2>Calculator</h2>
		<p>Developed using PHP</p>
		<hr>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="first_number" placeholder="First Number" required="required" value="<?php echo isset($fn)?$fn:''; ?>" pattern="[0-9]+" title="only numbers"></div>
				<div class="col"><input type="text" class="form-control" name="second_number" placeholder="Second Number" required="required" value="<?php echo isset($sn)?$sn:''; ?>" pattern="[0-9]+" title="only numbers"></div>
			</div>        	
        </div>
        <div class="form-group">
        			<?php if(isset($result) && is_numeric($result)){?>
       <h4 style="color:blue; font-weight:bold;"> 	Result: <?php echo $result; ?></h4>
        		<?php } if(isset($error)){?>
        		 <h5 style="color:red; font-weight:bold;"> 	Error: <?php echo $error; ?></h5>
        				<?php } ?>
        </div>
		<div class="form-group">
  		<input class="btn btn-primary" type="submit" name="Calculate" value="+">
					<input class="btn btn-primary" type="submit" name="Calculate" value="-">
				</div>

				<div class="form-group">
					<input class="btn btn-primary" type="submit" name="Calculate" value="x">
					<input class="btn btn-primary" type="submit" name="Calculate" value="/">
        </div>
    </form>
</div>
</body>
</html>