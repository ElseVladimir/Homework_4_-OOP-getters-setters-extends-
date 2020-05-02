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
    <title>Full food information</title>
</head>
<body>
<h1>Полная информация о напитках</h1>
<h3>Через Html writer</h3>
<?php foreach($drinks as $drink):?>
    <?php if(!empty($drink)) :?>
        <?php $write = new HtmlWriter(); ?>
    <?php endif; ?>
    <?php $fullDrink = new Drink($drink['name'],$drink['price'],NULL,NULL,$drink['volume']);
    echo $write->writeHtmlDrink($fullDrink);?>
<?php endforeach; ?>
<a href="index.php">Главная</a>
</body>
</html>
