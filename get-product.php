<?php
include('./template.php');

$category = $_GET['category'];
echo '<pre>';
return json_encode(getProductsInCategory($category));