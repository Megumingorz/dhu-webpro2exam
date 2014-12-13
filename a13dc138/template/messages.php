<?php
include_once('util.php');
session_start();
$token = session_id();
$_SESSION['token'] = $token;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>WEBプログラミング演習2最終課題</title>
</head>
<body>

<p><a href="../rooms/">ルーム一覧</a></p>

<?php if ($room_name): // $room_name==true ?>
<h1><?php h($room_name); ?></h1>
<p><?php h($room_name); ?>のメッセージ一覧です。</p>

<?php if ($data): // $data=true ?>
<ul>
    <li>
        <ul>
<?php foreach ($data as $d) : ?>
            <li><?php h($d['content']); ?></li>
            <li><?php h($d['sent_at']); ?></li>
<?php endforeach; ?>
        </ul>
    </li>
</ul>
<?php else: // $data==false ?>
<p>メッセージはありません</p>
<?php endif; // data ?>
<form action='record.php' method="post">
    <input type="text" name="comment">
    <input type="hidden" name="room_id" value="<?php h($room_id); ?>">
    <input type="hidden" name="token" value="<?php echo $token; ?>">
    <button type="submit">送信</button>
</form>
<?php else: // $room_name==false ?>
<p>ルームが見つかりません</p>
<?php endif; // $room_name ?>

</body>
</html>