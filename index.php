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
    <title>Menu</title>
</head>
<body>
<h1>Меню ресторана</h1>
<?php foreach($foods as $foodKey => $food) :?>
    <?php if(!empty($foods)):?>

        <?php
        $foodClass = new Food($food['name'],$food['price'],$food['ingredients'],$food['weight']);
        $foodClass->setFoodName($food['name']);
        echo $foodClass->getFoodName();
        ?>

    <?php endif; ?>
<?php endforeach; ?>

<?php foreach($drinks as $drinksKey => $drink) :?>
    <?php if(!empty($drinks)):?>

        <?php
        $foodClass = new Drink($drinks['name'],$drinks['price'],NULL,NULL,$drinks['volume']);
        $foodClass->setDrinkName($drink['name']);
        echo $foodClass->getDrinkName();
        ?>

    <?php endif; ?>
<?php endforeach; ?>
<hr>
<div>
    <h4>Разделы</h4>
    <pre>
    <a href="#">Полная информация о еде</a>
    <a href="vegan.php">Вегетарианское</a>
    <a href="#">Полная информация о напитках</a>
    </pre>
</div>
<?php
$write = new HtmlWriter();
$test = new Food('ssss', 111,'sdf',12);
echo $write->writeHtmlFood($test);

?>
</body>
</html>
