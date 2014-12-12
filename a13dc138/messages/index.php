<?php
include_once('../mvc/messages_controller.php');

if(isset($_GET['id'])){
    $room_id = $_GET['id'];
    $controller = new MessagesController($room_id);
    $controller->index();
} else {
    echo "idが指定されていないためメッセージが表示できません";
}
