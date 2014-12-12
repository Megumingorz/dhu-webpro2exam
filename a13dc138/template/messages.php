<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>WEBプログラミング演習2最終課題</title>
</head>
<body>

<p><a href="../rooms/">ルーム一覧</a></p>

<h1><?php echo $room_name ?></h1>
<p><?php echo $room_name ?>のメッセージ一覧です。</p>

<?php if (isset($data)){ ?>
<ul>
    <li>
        <ul>
<?php foreach ($data as $d) { ?>
            <li><?php echo $d['content'] ?></li>
            <li><?php echo $d['sent_at'] ?></li>
<?php } ?>
        </ul>
    </li>
</ul>
<?php } else { ?>
<p>メッセージはありません</p>
<?php } ?>
<form action='record.php' method="post">
    <input type="text" name="comment">
    <input type="hidden" name="room_id" value="<?php echo $room_id ?>">
    <button type="submit">送信</button>
</form>

</body>
</html>