<?php

class MessagesView{
    private $model;

    function __construct($model){
        $this->model = $model;
    }
    function render($room_id, $room_name){
        $data = $this->model->getAll();
        include_once('../template/messages.php');
    }
}