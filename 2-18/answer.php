<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['name'];

$question1 = $_POST['question1']; //ラジオボタンの内容を受け取る
$answer1 = $_POST['answer1'];   //hiddenで送られた正解を受け取る

$question2 = $_POST['question2']; //ラジオボタンの内容を受け取る
$answer2 = $_POST['answer2'];   //hiddenで送られた正解を受け取る

$question3 = $_POST['question3']; //ラジオボタンの内容を受け取る
$answer3 = $_POST['answer3'];   //hiddenで送られた正解を受け取る

//結果の判定
if($question1 == 80){
	$result_1 = "正解！";
}else{
	$result_1 = "残念･･･";
}

if($question2 == 'HTML'){
	$result_2 = "正解！";
}else{
	$result_2 = "残念･･･";
}

if($question3 == 'select'){
	$result_3 = "正解！";
}else{
	$result_3 = "残念･･･";
}
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

?>
<p><?php echo $name; ?><!--POST通信で送られてきた名前を表示-->さんの結果は・・・？</p>
<?php echo '<br>'; ?>
<p>①の答え
<?php echo '<br>'; ?>
<?php echo $result_1 ?>
</p>
<!--作成した関数を呼び出して結果を表示-->

<p>②の答え
<?php echo '<br>'; ?>
<?php echo $result_2 ?>
</p>
<!--作成した関数を呼び出して結果を表示-->

<p>③の答え
<?php echo '<br>'; ?>
<?php echo $result_3 ?>
</p>
<!--作成した関数を呼び出して結果を表示-->