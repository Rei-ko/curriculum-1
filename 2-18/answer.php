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

function juge($question, $answer){
if($question == $answer){
  echo "正解！";
}else{
  echo "残念・・・";
}
}
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
        <?php juge($question1, $answer1) ?>
        </p>
        <!--作成した関数を呼び出して結果を表示-->
        <p>②の答え
        <br>
        <?php juge($question2, $answer2) ?>
        </p>
        <!--作成した関数を呼び出して結果を表示-->
        <p>③の答え
        <br>
        <?php juge($question3, $answer3) ?>
        </p>
      </div> 
   </div>
</body>
</html>