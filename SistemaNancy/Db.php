<?php

class Db{
    private $host = 'localhost';
    private $db = 'm_rim';
    private $user = 'root';
    private $password = '';
    protected function pdo_Connect(){
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=UTF8";
        $pdo = new PDO($dsn, $user, $password);
        return $pdo;
    }
    protected function my_Connect(){
        $conn = new mysqli($this->host, $this->user, $this->password, $this->db);
        return $conn;
    }
}

class Test extends Db{
    public function conectar(){
        if($this->my_Connect()){
        }
    }
}

$miClase = new Test();
$miClase->conectar();