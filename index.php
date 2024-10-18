<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Корзина товаров</title>
</head>

<body>
    <div class="wrapper">
        <div class="head">
            <div class="title">
                <h2>Корзина товаров</h2>
            </div>
            <ul class="title__ul">
                <li class="title__li">Наименование</li>
                <li class="title__li">Количество</li>
                <li class="title__li">Стоимость</li>
            </ul>
        </div>
        <?php
        $sum1 = "110 000 руб.";
        $sum2 = "29 000 руб.";
        $sum3 = "190 000 руб.";
        include "./tbody.php";
        include "./tfoot.php";
        ?>
    </div>
</body>

</html>