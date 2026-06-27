<?php
$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;

$number = 6;

$age = 18;
$is_member = true;
$is_student = false;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $final_price;?><br>    
    <?php 
        if ($number % 2 == 0) {
        echo "{$number}は偶数です";
        } else {
        echo "{$number}は奇数です";
    }?><br>

    <?php 
    if ($age >= 18 && $is_member) {
    echo "割引が適用されます<br>";
    }

    if ($age >= 65 || $is_student) {
    echo "シニア・学生割引が適用されます<br>";
    }?><br>

    <?php 
    $score = 100;
    echo "初期スコア: {$score}点<br>";

    $score += 50;
    echo "ボーナス後: {$score}点<br>";

    $score -= 30;
    echo "ダメージ後: {$score}点<br>";

    $score *= 2;
    echo "最終スコア: {$score}点<br>";
    ?><br>
</body>
</html>