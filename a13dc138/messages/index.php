<?php
include_once('../mvc/messages_controller.php');

$room_id = $_GET['id'];
$controller = new MessagesController($room_id);
$controller->index();
