<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Best Shop<</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    </head>
<body>
    <header>
    <h1>Header, info о магазине. TODO - отдельный файл для изменения данных</h1> 
    </header>
    <menu>
    <h3>Категории товаров</h3>
       <?php include('./data/menu.php'); ?>    
    </menu>
    <main>
        <h2>Список товаров</h2>
  
    <?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
      };
      $listProduct=include './data/list.php';
        foreach ($listProduct as $productItem) { 
            foreach ($productItem as $productParam) {
    if ($productParam['id']==$id) {
        foreach ($productParam as $key) {
            echo $key.'</br>';
        };
    };
};      
}; 
    ?>

    </main>
    <footer>
Сделано по спец.заказу
    </footer>
</body>
</html>