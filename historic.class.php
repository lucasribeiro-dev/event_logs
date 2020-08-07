<?php
class Historic{
    private $pdo;

    public function __construct(){

        $this->pdo = new PDO("mysql:dbname=event_log;
        host=localhost", "root", "");
    }

    public function register($action){
        $ip =  $_SERVER['REMOTE_ADDR'];

        $sql = "INSERT INTO historic SET ip = :ip, action_date = NOW(), action_ = :action_";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":ip", $ip);
        $sql->bindValue(":action_", $action);
        $sql->execute();

    }
}



?>