<?php
include('LoginAdmin.php'); // Includes Login Script

    if(isset($_SESSION['username'])){
        header("location: Homepage.php");
    }
	if(isset($_GET['error'])){
	   $error = $_GET['error'];
	}
    else{
        $error='';
    }
    $pesan='';
    if($error=='salah'){
        $pesan="Silahkan isi Username dan Password dengan Benar";
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link href="../css/log-style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class = "container">
	<div class="wrapper">
		<form action="" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Administration! Please Sign In</h3>
            <br>
			  
			  <input type="text" class="form-control" name="username" placeholder="username" required="" autofocus="" />
			  <input type="password" class="form-control" name="password" placeholder="password" required/>     		  
			 
			  <button class="btn btn-lg btn-primary btn-block"  name="submit" value="Login" type="submit">Login</button><br>
              
                <span class="error"><strong>
                <?php echo $pesan; ?>
                </strong></span>
		</form>			
	</div>
</div>
</body>
</html>