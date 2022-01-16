<html>
<head>
	<meta charset="utf-8">
	<title>POST練習</title>
</head>
<body>


<form action="write.php" method="post">
	お名前: <input type="text" name="name">
	<br />
	EMAIL: <input type="text" name="mail">
	<br />
	好きな食べ物: 
		<input type="checkbox" name="foods[]" value="唐揚げ">唐揚げ
		<input type="checkbox" name="foods[]" value="カレー">カレー
		<input type="checkbox" name="foods[]" value="お寿司">お寿司
		<input type="checkbox" name="foods[]" value="ドリア">ドリア

	<input type="submit" value="送信">
</form>


<ul>
	<li><a href="index.php">戻る</a></li>
</ul>

</body>
</html>