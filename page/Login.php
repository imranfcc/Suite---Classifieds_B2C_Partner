<!DOCTYPE html>
<html lang="en">
<head>
	<?php if(is_file("page/inc/HTML_HEAD.php")){ include("page/inc/HTML_HEAD.php"); } ?>
</head>
<body>
<?php if(is_file("include/Pages/bodyHeader.cms.php")){ include("include/Pages/bodyHeader.cms.php"); } ?>
<!-- Start : Your Page Source -->

  
  
  <div class="container">
	<div class="row">
		<div class="col-12 col-md-6 py-5">
			<span style="font-size:18pt;">Log In</span><br>
			with your Account
			<form method="POST" action="" style="margin-top:25px;">
				<div class="form-group input-group-lg">
					<label for="usr">Username:</label>
					<input type="text" class="form-control" name='WebLoginUsername' id="username">
				</div>
				<div class="form-group input-group-lg">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" name="WebLoginPassword" id="password">
				</div>
				<button type="submit" class="btn btn-primary btn-lg " style="float:right;" name="Script" value="Login" >Sign In</button>
			</form>
		</div>
		<div class="col-12 col-md-6 py-5">
			Registeration is not working
		</div>
	</div>
</div>
  
  
<!-- End : Your Page Source -->
<?php if(is_file("include/Pages/bodyBottom.cms.php")){ include("include/Pages/bodyBottom.cms.php"); } ?>
</body>
</html>