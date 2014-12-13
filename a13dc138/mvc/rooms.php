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
            $this->data = (empty($result)) ? false : $result ;
        } catch (PDOException $e) {
            var_dump($e->getMessage());
            exit();
        }
    }
    function getAll(){
        return $this->data;
    }
    function getName($room_id){
        return (empty($this->data[$room_id])) ? false : $this->data[$room_id] ;
    }
}