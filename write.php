<?php

// 文字作成(日付)
$time = date("Y-m-d H:i:s");
$name = $_POST['name'];
$mail = $_POST['mail'];
$foods = $_POST['foods'];
foreach($foods as $value){
    $food .=$value.",";
}

$str = $time . '/' .$name. '/' .$mail. '/' .$food;

// File書き込み

$file = fopen('data/data.txt','a');
fwrite($file, $time . '/' .$name. '/' .$mail. '/' .$food."\n"); //ファイルに書き込み
fclose($file); //ファイルを閉じる



?>


<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>

</body>
</html>