<?php
include('../template.php');

$category = $_GET['category'];
$product = $_GET['category'];

echo json_encode(doesProductExistInCategory($category, $product));
