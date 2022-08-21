<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('H');

if (5 <= $time && $time <= 11 ){
    echo "今{$time}時台です";
    echo '<br>';
    echo "おはようございます";
} elseif (12 <= $time && $time <= 17){
    echo "今{$time}時台です";
    echo '<br>';
    echo "こんにちは";
} else {
    echo "今{$time}時台です";
    echo '<br>';
    echo "こんばんは";
}
?>