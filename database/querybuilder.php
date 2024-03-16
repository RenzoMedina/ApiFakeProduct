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
}