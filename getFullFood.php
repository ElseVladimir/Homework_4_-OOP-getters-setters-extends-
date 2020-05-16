<?php
require_once "menuArray.php";
require_once "classes/Menu.php";
require_once "classes/Food.php";
require_once "classes/Drink.php";
require_once "classes/HtmlWriter.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Full food information</title>
</head>
<body>
<h1>Полная информация о еде</h1>
<h3>Через Html writer</h3>
<?php foreach($foods as $food):?>
    <?php if(!empty($food)) :?>
    <?php endif; ?>
    <?php $fullFood = new Food($food['name'], $food['price'],$food['ingredients'],$food['weight']);
    echo HtmlWriter::writeHtmlFood($fullFood);?>
<?php endforeach; ?>
<a href="index.php">Главная</a>
</body>
</html>
