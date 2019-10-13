<?php


if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'admin' && $pwd == 'pass'){
		echo '<h3>Successfully logged in</h1>';

	}
	else{
		echo 'Invalid Credentials';
		exit();
	}
}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Cross Site Request Forgery Protection</title>
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script>

	$(document).ready(function(){

	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("token_to_be_added").setAttribute('value', this.responseText) ;
		}


	};

	xhttp.open("GET", "csrf_token_generator.php", true);
	xhttp.send();

	});
</script>
	</head>
	<body>
		<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
                <div class="wrap-login100">

                      <form class="form" action="home.php" method="post">
                            <div class="form-group">
                                <label for="username" class="text-white"><h4>Write Something<h4></label><br>
                                <input type="text" name="updatepost" class="form-control">
                            </div>
                            <div id="div1">
					              <input type="hidden" name="token" value="" id="token_to_be_added"/>
					        </div>
                            <div class="form-group">
                                <input type="submit"  class="btn btn-info btn-md" value="updatepost">
                            </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

	</body>
</html>
