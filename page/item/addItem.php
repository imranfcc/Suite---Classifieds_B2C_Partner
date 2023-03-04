<!DOCTYPE html>
<html lang="en">
<head>
	<?php if(is_file("page/inc/HTML_HEAD.php")){ include("page/inc/HTML_HEAD.php"); } ?>
</head>
<body>
<?php if(is_file("include/Pages/bodyHeader.cms.php")){ include("include/Pages/bodyHeader.cms.php"); } ?>
<!-- Start : Your Page Source -->

<div class="container">
    <h2>Add New Item</h2>
    <hr>
    <form method="POST" action="" style="margin-top:25px;">
        <div class="mb-3 mt-3">
            <label for="title" class="form-label">Item Title:</label>
            <input type="text" class="form-control" id="AddItem_Title" placeholder="Item Title" name="AddItem_Title">
        </div>
    </form>
</div>

<!-- End : Your Page Source -->
<?php if(is_file("include/Pages/bodyBottom.cms.php")){ include("include/Pages/bodyBottom.cms.php"); } ?>
</body>
</html>