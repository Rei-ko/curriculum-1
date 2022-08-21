<?php
$dice = 0;
$sum = 0;
do {
    $dice++; 
    $num = mt_rand(1, 6);
    $count = sprintf("%d回目 = %d", $dice, $num);
    echo $count; 
    echo '<br>';
    $sum += $num;
} while ($sum < 40);
    $total = sprintf("合計%d回でゴールしました", $dice);
    echo $total;
?>
