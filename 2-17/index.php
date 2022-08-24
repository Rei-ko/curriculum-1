<?php
$dice = 0;
$sum = 0;
while ($sum < 40){
    $dice++; 
    $num = mt_rand(1, 6);
    echo "{$dice}回目 = {$num}";
    echo '<br>';
    $sum += $num;
}
    echo "合計{$dice}回でゴールしました";
?>
