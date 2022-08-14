<?php
$fruits = ["apple" => "りんご", "orange" => "みかん", "peach" => "もも"];

// foreach ($fruits as $key => $value) {
//     echo '<br>';
//     echo $key;  
//     echo $value;
//     echo $key.'といったら'.$value;
// }
foreach($fruits as $key=>$val){
    echo $key.'といったら'.$val;
    echo '<br>';
}
?>