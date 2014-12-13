<?php include_once('util.php'); ?>
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

<?php if ($rooms): //$rooms==true ?>
<ul>
<?php foreach ($rooms as $id => $name):?>
    <li><a href="../messages/?id=<?php h($id); ?>"><?php echo $name ?></a></li>
<?php endforeach; ?>
</ul>
<?php else: ?>
<p>ルームはありません</p>
<?php endif; ?>

</body>
</html>