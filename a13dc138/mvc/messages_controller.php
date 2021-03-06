<?php
include_once('messages_view.php');
include_once('messages.php');
include_once('rooms.php');

class MessagesController{
    private $model;
    private $view;
    private $room_id;
    private $room_name;

    function __construct($room_id){
        $this->room_id = $room_id;
        $this->setRoomName();
        $this->model = new Messages($this->room_id);
        $this->view = new MessagesView($this->model);
    }
    private function setRoomName(){
        $rooms = new Rooms();
        $rooms->setData();
        $this->room_name = $rooms->getName($this->room_id);
    }
    function index(){
        $this->model->setData();
        $this->view->render($this->room_id, $this->room_name);
    }
    function create($message){
        $this->model->saveMessage($message);
    }
}
