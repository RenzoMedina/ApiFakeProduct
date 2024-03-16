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

    public function create(){
        //esto para poder habilitar para que el usuario lo ingreso manual
        //$request = Flight::request()->data;

        $requ = new FakeProduct();
        $this->product = $requ->products();
        $json = json_encode($this->product);
        $this->db->create($json);
        $data = [
            "message"=>"Datos han sido guardados correctamente",
            "data"=> json_decode($json),
            "status"=>201
        ];
        Flight::json($data);
    }
    public function show($id){
        $fake = new FakeProduct();
        $this->product = $fake->products();
        Flight::json([
            "status"=>200,
            "msg"=>$this->product
        ]);
    }
    public function update($id){}
    public function delete($id){}

}