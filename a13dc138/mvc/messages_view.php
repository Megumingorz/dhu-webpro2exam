<?php

class MessagesView{
    private $model;
    private $room_name;

    function __construct($model, $room_name){
        $this->model = $model;
        $this->room_name = $room_name;
    }
    function render(){
        $data = $this->model->getAll();
        include_once('../template/messages.php');
    }
}