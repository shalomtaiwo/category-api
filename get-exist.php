<?php
include('../template.php');

$category = $_GET['category'];
$product = $_GET['product'];

echo json_encode(doesProductExistInCategory($category, $product));
