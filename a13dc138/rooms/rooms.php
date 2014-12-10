<?php

class Rooms{
    private $data;

    function setData(){
        try {
            $pdo = new PDO(
                    'mysql:host=localhost;dbname=webpro2examdb;charset=utf8;',
                    'root',
                    'root'
                );
            $rs = $pdo->query('SELECT * FROM rooms');
            $result = array();
            while($row = $rs->fetch(PDO::FETCH_ASSOC)){
                $result[$row['id']] = $row['name'];
            }
            $this->data = $result;
        } catch (PDOException $e) {
            die($e->getMassage());
        }
    }

    function getAll(){
        return $this->data;
    }
    function getName($room_id){
        return $this->data[$room_id];
    }
}