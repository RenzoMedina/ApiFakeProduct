<?php

namespace app\controller;
use Flight;
use Faker\Factory;

class ProductController{
    public $faker;
    public function __construct(){
        $this->faker = Factory::create();
    }
    public function index(){
        
        Flight::json([
            "status"=>200,
            "msg"=>"Hola soy el index",
            "name"=>$this->faker->name
        ]);
    }
    public function create(){}
    public function show($id){
        Flight::json([
            "status"=>200,
            "msg"=>"Hola soy el index".$id
        ]);
    }
    public function update($id){}
    public function delete($id){}

}