<?php

class RoomsView{
    private $model;

    function __construct($model){
        $this->model = $model;
    }
    function render(){
        $rooms = $this->model->getAll();
        include_once('rooms_htdoc.php');
    }
}