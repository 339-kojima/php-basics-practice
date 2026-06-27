<?php

$product_name = "ノートパソコン";
$price = 80000 ;
$quantity = 2;
$tax_rate = 0.1;
$subtotal = $price * $quantity;
$tax_amount = $subtotal * $tax_rate;
$total = $subtotal + $tax_amount;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品価格計算</title>
</head>
<body>
    商品名：<?php echo $product_name; ?><br>
    単価：<?php echo $price . "円"; ?><br>
    数量：<?php echo $quantity . "個"; ?><br>
    小計：<?php echo $subtotal . "円"; ?><br>
    消費税（10%）：<?php echo $tax_amount . "円"; ?><br>
    <strong>合計金額：<?php echo $total . "円"; ?></strong>
</body>
</html>