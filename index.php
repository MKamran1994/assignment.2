<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Assignment_1=====Responsive Design</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="validate.js"></script>
</head>
<body>
    <h2 style="color: black;text-align: center;"">Assignment_2=====Responsive Design with Validation</h2>
<div class="login-form">    
    <form action="actions.php" method="post" name="myForm" onsubmit="return validateForm()">
		<div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
    	<h4 class="modal-title">Login to Your Account</h4>
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password">
        </div>
        <div class="form-group small clearfix">
            <label class="checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="forgot-link">Forgot Password?</a>
        </div> 
        <input type="submit" name="submit" class="btn btn-primary btn-block btn-lg" value="submit">              
    </form>			
    <div class="text-center small">Don't have an account? <a href="#">Sign up</a></div>
</div>
</body>
</html>                                		                            

