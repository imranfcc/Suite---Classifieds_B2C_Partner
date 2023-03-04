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
			<span style="font-size:18pt;"></span><br>
			// TODO: Stil to fix this form
			<form method="POST" action="" style="margin-top:25px;">
                <div class="input-group input-group-lg mb-3">
                    <input type="text" class="form-control" placeholder="UPC / EAN / ISBN / SKU " name="SearchItem" id="SearchItem">
                    <button class="btn btn-success" type="submit">Go</button> 
                </div>
				</button type="submit" class="btn btn-primary btn-lg " style="float:right;" name="Script" value="Login" ></button>
			</form>
		</div>
		<div class="col-12 col-md-6 py-5">
            <h2>Add new item <h2>
            <a href="item/addItem" class="btn btn-lg btn-primary ">Add New Item</a>
		</div>
	</div>
</div>
<!-- End : Your Page Source -->
<?php if(is_file("include/Pages/bodyBottom.cms.php")){ include("include/Pages/bodyBottom.cms.php"); } ?>
</body>
</html>