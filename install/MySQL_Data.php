<?php 


insert_page('item/add', 'item/add.php', 'User'); // 

// Lock home page 
$sql = "SELECT * FROM `pages` WHERE `Page`='Home.php'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $sql = "UPDATE `pages` SET `Access`='User' WHERE `Page`='Home.php'";
    $con->query($sql);
}

?>
