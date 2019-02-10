<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

if (!isset($category)){echo '<div><p> Самый лучший магаз</P></div> <div>выбирай слева</div>'; }
else {

        $listProduct=include 'list.php';
        foreach ($listProduct as $productItem) { 
               
            foreach ($productItem as $productParam) {
                
                    if ($productParam['category']==$category) {
                     echo $productParam['category'].' '.'<a href="../describeProduct.php?id='
                     .$productParam['id'].'">'.$productParam['name'].'</a>';
                    echo '</br>'; };
                                                                
            };
            unset($productParam);         
        };
} 

?> 