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
    <title>Vegan</title>
</head>
<body>
<h1>Веган меню</h1>
<?php foreach($foods as $foodKey => $food) :?>
    <?php if(!empty($food) && $food['vegan'] == true):?>

        <?php
        $foodClass = new Food($food['name'],$food['price'],$food['ingredients'],$food['weight']);
        $foodClass->setFullInfo($food['name'],$food['price'],$food['ingredients'],$food['weight']);
        echo $foodClass->getFullInfo();
        ?>

    <?php endif; ?>
<?php endforeach; ?>
<hr>
<a href="index.php">Главная</a>
</body>
</html>
