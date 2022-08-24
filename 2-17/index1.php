<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('H');
echo "今{$time}時台です";
echo '<br>';

if (5 <= $time && $time <= 11 ){
    echo "おはようございます";
} elseif (12 <= $time && $time <= 17){
    echo "こんにちは";
} else {
    echo "こんばんは";
}
?>