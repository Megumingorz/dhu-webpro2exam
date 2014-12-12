<?php
include_once('rooms_view.php');
include_once('rooms.php');

class RoomsController{
    private $model;
    private $view;

    function __construct(){
        $this->model = new Rooms();
        $this->view = new RoomsView($this->model);
        $this->model->setData();
    }
    function index(){
        $this->view->render();
    }
}
