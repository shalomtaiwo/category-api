<?php
include('../template.php');

$category = $_GET['category'];
echo json_encode(getProductsInCategory($category));