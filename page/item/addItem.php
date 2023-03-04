<!DOCTYPE html>
<html lang="en">
<head>
	<?php if(is_file("page/inc/HTML_HEAD.php")){ include("page/inc/HTML_HEAD.php"); } ?>
</head>
<body>
<?php if(is_file("include/Pages/bodyHeader.cms.php")){ include("include/Pages/bodyHeader.cms.php"); } ?>
<!-- Start : Your Page Source -->

<div class="container">
    <h3>Add New Item</h3>
    <hr>
    <form method="POST" action="" style="margin-top:25px;">
        <div class="mb-3 mt-3">
            <label for="title" class="form-label">Item Title:</label>
            <input type="text" class="form-control" id="AddItem_Title" placeholder="Item Title" name="AddItem_Title">
        </div>
        <h4>Your offer of this item</h4>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="border p-3">
                    <h5 class="border-bottom">Stocks</h5>
                    <div class="mb-3 mt-3">
                        <label for="Condition" class="form-label">Condition:</label>
                        <select class="form-select " >
                            <option value="New">New</option>
                            <option value="asNew">as New</option>
                            <option value="Good">Good</option>
                            <option value="Reasonable">Reasonable</option>
                        </select>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="quantity" class="form-label">Quantity:</label>
                        <input type="text" class="form-control" id="AddItem_Quantity" placeholder="Quantity" name="AddItem_Quantity">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="border p-3 h-100">
                    <h5 class="border-bottom">Shipment</h5>
                    <div class="mb-3 mt-3">
                        <label for="Condition" class="form-label">Delivery time:</label>
                        <select class="form-select " >
                            <option value="24h">within 24 hour</option>
                            <option value="1-2wd">1-2 workingdays</option>
                            <option value="2-3wd">2-3 workingdays</option>
                            <option value="3-5wd">3-5 workingdays</option>
                            <option value="4-8wd">4-8 workingdays</option>
                            <option value="1-8wd">1-8 workingdays</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <div class=" border p-3">
                    <h5 class="border-bottom">Price</h5>
                    <div class="mb-3 mt-3">
                        <label for="defaultPrice" class="form-label">Default Price:</label>
                        <input type="text" class="form-control" id="AddItem_defaultPrice" placeholder="DefaultPrice" name="AddItem_defaultPrice">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- End : Your Page Source -->
<?php if(is_file("include/Pages/bodyBottom.cms.php")){ include("include/Pages/bodyBottom.cms.php"); } ?>
</body>
</html>