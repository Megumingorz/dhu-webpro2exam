<?php

class Messages{
    private $data;
    private $room_id;

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
            $rs = $pdo->prepare("SELECT * FROM messages WHERE room_id=?");
            $rs->execute(array($this->room_id));
            $result = array();
            while($row = $rs->fetch(PDO::FETCH_ASSOC)){
                // $time = strtotime($row['sent_at']);
                $result[$row['id']] = array(
                    'sent_at' => $row['sent_at'],
                    'content' => $row['content']
                );
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
    function saveMessage($message){
        try {
            $pdo = new PDO(
                    'mysql:host=localhost;dbname=webpro2examdb;charset=utf8;',
                    'root',
                    'root'
                );
            $pdo->query("INSERT INTO messages VALUES (null, $this->room_id, now(), '$message');");
        } catch (PDOException $e) {
            var_dump($e->getMessage());
            exit();
        }
    }
}