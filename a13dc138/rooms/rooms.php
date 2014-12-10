<?php

class Rooms{
    private $pdo;
    function __construct(){
        try {
            $this->pdo = new PDO(
                    'mysql:host=localhost;dbname=webpro2examdb;charset=utf8;',
                    'root',
                    'root'
                );
        } catch (PDOException $e) {
            die($e->getMassage());
        }
    }

    function all(){
        $result = array();
        $rs = $this->pdo->query('SELECT * FROM rooms');
        while($row = $rs->fetch(PDO::FETCH_ASSOC)){
            $result[$row['id']] = $row['name'];
        }
        return $result;
    }
    function load(){

    }
}