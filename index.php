<?php
require_once "menuArray.php";
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
    <title>Document</title>
</head>
<body>
<h1>Меню ресторана</h1>
<?php foreach($foods as $foodKey => $food) :?>
    <?php if(!empty($foods)):?>

        <?php
        $foodClass = new Food();
        $foodClass->setFoodName($food['name']);
        $foodClass->getFoodName();
        ?>

    <?php endif; ?>
<?php endforeach; ?>

<?php foreach($drinks as $drinksKey => $drink) :?>
    <?php if(!empty($drinks)):?>

        <?php
        $foodClass = new Drink();
        $foodClass->setDrinkName($drink['name']);
        echo $foodClass->getDrinkName();
        ?>

    <?php endif; ?>
<?php endforeach; ?>

<div>
    <h4>Разделы</h4>
    <pre>
    <a href="#">Полная информация о еде и напитках</a>
    <a href="#">Вегетарианское</a>
    <a href="#">Напитки</a>
    </pre>
</div>

</body>
</html>
