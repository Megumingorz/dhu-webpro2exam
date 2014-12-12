<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>WEBプログラミング演習2最終課題</title>
</head>
<body>

<p><a href="./">ルーム一覧</a></p>

<h1>ルーム一覧</h1>
<p>発言したいルームを選択して下さい。</p>

<ul>
<?php foreach ($rooms as $id => $name):?>
    <li><a href="../messages/?id=<?php echo $id ?>"><?php echo $name ?></a></li>
<?php endforeach; ?>
</ul>

</body>
</html>