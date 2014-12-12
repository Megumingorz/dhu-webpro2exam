<?php

class Messages{
    private $room_id;
    private $data;

    function __construct($room_id){
        $this->room_id = $room_id;
    }
    function setData(){
        try {
            $pdo = new PDO(
                    'mysql:host=localhost;dbname=webpro2examdb;charset=utf8;',
                    'root',
                    'root'
                );
            $rs = $pdo->query("SELECT * FROM messages WHERE room_id=$this->room_id");
            $result = array();
            while($row = $rs->fetch(PDO::FETCH_ASSOC)){
                // $time = strtotime($row['sent_at']);
                $result[$row['id']] = array(
                    'sent_at' => $row['sent_at'],
                    'content' => $row['content']
                );
            }
            $this->data = $result;
        } catch (PDOException $e) {
            var_dump($e->getMessage());
            exit();
        }
    }
    function getAll(){
        return $this->data;
    }
}