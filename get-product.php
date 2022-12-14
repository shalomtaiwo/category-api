<?php
include('./template.php');

$category = $_GET['category'];
echo '<pre>';
print_r(json_encode(getProductsInCategory($category)));