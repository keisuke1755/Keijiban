<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");

$pdo->exec("insert into 4each_keijiban(handlname,title,comments) values('".$_POST['ind_handlname']."','".$_POST['ind_title']."','".$_POST['ind_comments']."');");

header("Location:http://localhost/4each_keijiban/index.php");

?>