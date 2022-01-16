

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>投稿日時</th><th>名前</th><th>メールアドレス</th><th>好きな食べ物</th>
        </tr>
        <?php

            // ファイルを開く
            $file = fopen('data/data.txt', 'r');
            
            // ファイル内容を1行ずつ読み込んで出力
            while ($infos = fgets($file)){
                $info = explode('/',$infos);
                echo '<tr><td>'.$info[0].'</td><td>'.$info[1].'</td><td>'.$info[2].'</td><td>'.$info[3].'</td></tr>';
            }

            // ファイルを閉じる
            fclose($file);

            ?>
    </table>
</body>
</html>