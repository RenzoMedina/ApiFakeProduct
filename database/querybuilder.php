<?php

namespace database;

class Querybuilder{
    protected  $query;
    protected  $table;
    public function __construct(){
        $this->query = Database::start();
        $this->table = $_ENV['DB_TABLE'];
    }
    public function getAll(){
        $sql = "SELECT * FROM ".$this->table;
        try {
            $stament = $this->query->prepare($sql);
            $stament->execute();
            $result = $stament->fetchAll(\PDO::FETCH_OBJ);
            return $result;
        } catch (\PDOException $e) {
            echo "Error on GetAll:".$e->getMessage();
        }
    }

    public function create($data){
        $values = json_decode($data,true);
        $sql = "INSERT INTO {$this->table} (name,price,quantity,description) VALUES (?,?,?,?)" ;
        try {   
            $stament = $this->query->prepare($sql);
            $stament->bindParam(1, $values["name"], \PDO::PARAM_STR);
            $stament->bindParam(2, $values["price"], \PDO::PARAM_INT);
            $stament->bindParam(3, $values["quantity"], \PDO::PARAM_INT);
            $stament->bindParam(4, $values["description"], \PDO::PARAM_STR);
            $stament->execute();   
        } catch (\PDOException $e) {
            echo "Error on Create:".$e->getMessage();
        }
    }
}