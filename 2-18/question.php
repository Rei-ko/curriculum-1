<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$question1 = array();
$question1 = array(80,22,21,20);
$answer1 = 80; 

$question2 = array();
$question2 = array('PHP','Python','JAVA','HTML');
$answer2 = 'HTML'; 

$question3 = array();
$question3 = array('join','select','insert','update');
$answer3 = 'select'; 
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="question.css">
  <style></style>
</head>
<body>
   <div id="wrapper">
      <div class="p">
         <p>お疲れ様です<?php echo $name; ?><!--POST通信で送られてきた名前を出力-->さん</p>
      </div>
      <div class="h2">
         <form action="answer.php" method="post">
            <h2>①ネットワークのポート番号は何番？</h2>
            <?php foreach($question1 as $value){ ?>
            <input type="radio" name="question1" value="<?php echo $value; ?>" /> <?php echo $value; ?>
            <?php } ?>
            <h2>②Webページを作成するための言語は？</h2>
            <?php foreach($question2 as $value){ ?>
            <input type="radio" name="question2" value="<?php echo $value; ?>" /> <?php echo $value; ?>
            <?php } ?>
            <h2>③MySQLで情報を取得するためのコマンドは？</h2>
            <?php foreach($question3 as $value){ ?>
            <input type="radio" name="question3" value="<?php echo $value; ?>" /> <?php echo $value; ?>
            <?php } ?>
            <br>
            <input type="hidden" name="answer1" value="<?php echo $answer1 ?>">
            <input type="hidden" name="answer2" value="<?php echo $answer2 ?>">
            <input type="hidden" name="answer3" value="<?php echo $answer3 ?>">
            <input type="hidden" name="name" value="<?php echo $name ?>">
            <input type="submit" value="回答する">
         </form>  
      </div> 
   </div>
</body>
</html>