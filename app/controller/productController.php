<?php

namespace app\controller;
use app\model\Product;
use database\FakeProduct;
use database\Querybuilder;
use Flight;


class ProductController{

    public $product;
    protected $db;
    public function __construct(){
        
        $this->db = new Querybuilder();
        $this->product = new Product();
    }
    public function index(){
        
        $result = $this->db->getAll();
        $product = $result;
        $data = [
            "message"=>"Datos generales",
            "data"=> $product,
            "status"=>200
        ];
        Flight::json($data);
    }

    public function create(){}
    public function show($id){
        $product = new FakeProduct();
    
        Flight::json([
            "status"=>200,
            "msg"=>$product->products()
        ]);
    }
    public function update($id){}
    public function delete($id){}

}