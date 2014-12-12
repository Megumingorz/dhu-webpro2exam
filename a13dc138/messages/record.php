<?php
include_once('../mvc/messages_controller.php');

$message = $_POST['comment'];
$room_id = $_POST['room_id'];
$controller = new MessagesController($room_id);
$controller->saveMassage($message);

header("location: ./?id=$room_id");