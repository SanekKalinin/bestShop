<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);
$products=include 'list.php';
foreach ($products['products'] as $category) {
       $uniqueCategory[]=$category['category'];
    };
    return array_unique($uniqueCategory);