<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);
$menu=include 'categories.php';
echo '<ul>';
echo '<li><a href="../index.php">Главная</a></li>';
foreach ($menu as $menuItem) {
   echo '<li><a href="index.php?category='.$menuItem.'">'.$menuItem.'</a></li>';
   }
echo '</ul>' 
?> 

