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
$answer1 = 80;
$answer2 = 'HTML';
$answer3 = 'select';

if ($answer1 == 80 || $answer2 == 'HTML' || $answer3 == 'select'){
  $result_1 = "正解！";
}else if($answer1 == 22 || $answer1 == 21 || $answer1 == 20 || $answer2 == 'Python' || $answer2 == 'JAVA' || $answer2 == 'PHP' || $answer3 == 'join' || $answer3 == 'insert' || $answer3 == 'updata') {
  $result_1 = "残念･･･";
}
// if($question1 == 80){
// 	$result_1 = "正解！";
// }else{
// 	$result_1 = "残念･･･";
// }

// if($question2 == 'HTML'){
// 	$result_2 = "正解！";
// }else{
// 	$result_2 = "残念･･･";
// }

// if($question3 == 'select'){
// 	$result_3 = "正解！";
// }else{
// 	$result_3 = "残念･･･";
// }
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="answer.css">
  <style></style>
</head>
<body>
   <div id="wrapper">
      <div class="p">
        <br>
        <p><?php echo $name; ?><!--POST通信で送られてきた名前を表示-->さんの結果は・・・？</p>
      </div>
      <div class="h3">
        <p>①の答え
	      <br>	
        <?php echo $result_1 ?>
        </p>
        <!--作成した関数を呼び出して結果を表示-->
        <p>②の答え
        <br>
        <?php echo $result_1 ?>
        </p>
        <!--作成した関数を呼び出して結果を表示-->
        <p>③の答え
        <br>
        <?php echo $result_1 ?>
        </p>
      </div> 
   </div>
</body>
</html>