<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>4eachblog 掲示板</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	
	<?php
	
	mb_internal_encoding("utf8");
	$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");
	$stmt = $pdo->query("select * from 4each_keijiban");
	
	?>

	<div class="logo">
        <img src="4eachblog_logo.jpg">
    </div>
    
    <div class="header">
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </div>

<div class="left">
    <h1>プログラミングに役立つ掲示板</h1>
        <form method="post" action="insert.php">
        <div class="content">
            <h3>入力フォーム</h3>
            ハンドルネーム<br>
            <input type="text" name="ind_handlname"><br>
            タイトル<br>
            <input type="text" name="ind_title"><br>
            コメント<br>
            <textarea cols="50" rows="7" name="ind_comments"></textarea><br>
            <input type="submit" class="submit" value="投稿する">
        </div>
    </form>

	<?php
	
    while($row = $stmt->fetch()){
	echo "<div class ='hyoji'>";
	echo "<div class='contents'>";
    echo "<h3>".$row['title']."</h3>";
    echo "<p>".$row['comments']."</p>";
	echo "<div class='handlname'>posted by".$row['handlname']."</div>";
	echo "</div>";
    echo "</div>";
	}
	
	?>

</div>

<div class="right">
    
    <h3>人気の記事</h3>
        <ul>
            <li>PHPオススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>いま人気のエディタTop5</li>
            <li>HTMLの確認</li>
        </ul>
    
    <h3>オススメリンク</h3>
        <ul>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>ECLIPSEのダウンロード</li>
            <li>Braketsのダウンロード</li>
        </ul>
    
    <h3>カテゴリ</h3>
        <ul>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
        </ul>
</div>       
    
<footer>copyright internous | 4each blog is the one which provides A to Z about programming.</footer>
	
</body>
</html>