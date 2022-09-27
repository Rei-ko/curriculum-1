<?php
require 'getData.php';
// セッション開始
session_start();

    try{
        $pdo = new PDO('mysql:dbname=checktest4;host=localhost;charset=utf8','root','root');
    } catch (PDOException $error) {
        //エラーの場合はエラーメッセージを吐き出す
        exit("データベースに接続できませんでした。<br>" . $error->getMessage());
    }
?>
<ul>
<?php
    //prepareでSQLを準備
    $select = $pdo->prepare('SELECT * FROM posts');
    $select->execute();     //準備したSQLを実行。PDO Statementクラスのオブジェクトが渡される。(SQLの結果も保持する)

    //PDO Statementのfetchメッソドを利用して、結果を一行ずつ取得。データがなくなるとFALSEを返す。
    while ($row = $select->fetch(PDO::FETCH_ASSOC)) {   
        $id = htmlspecialchars($row['id']);
        $title = htmlspecialchars($row['title']);   //タイトルを取得
        $category_no = htmlspecialchars($row['category_no']);
        $comment = htmlspecialchars($row['comment']);   
        $created = htmlspecialchars($row['created']);
        echo "<li><a href='$id'>'$title'>'$category_no'>'$comment'>'$created'</a></li>";
      }
?>
</ul>