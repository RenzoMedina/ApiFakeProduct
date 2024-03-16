<?php

namespace app\controller;
use app\model\Product;
use database\FakeProduct;
use database\Querybuilder;
use Flight;


class ProductController{

    public $product;
    protected $db;
    public $fake;
    public function __construct(){
        
        $this->db = new Querybuilder();
        $this->product = new Product();
        $this->fake = new FakeProduct();
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
        $request = Flight::request()->data;

        /**
         * En el caso cargemos datos con fake
         */
        //$requ = $this->fake;
        //$this->product = $requ->products();


        $json = json_encode($this->product);
        $json = json_encode($request);
        $this->db->create($json);
        $data = [
            "message"=>"Datos han sido guardados correctamente",
            "data"=> json_decode($json),
            "status"=>201
        ];
        Flight::json($data);
    }
    public function show($id){
        $result= $this->db->getId($id);
        $product = $result;  
        Flight::json([
            "message"=>"Los datos con id {$id} son:",
            "data"=>$product,
            "status"=>202
        ]);
    }
    public function update($id){
         //esto para poder habilitar para que el usuario lo ingreso manual
         $request = Flight::request()->data;

         /**
         * En el caso cargemos datos con fake
         */
        //$requ = $this->fake;
        //$this->product = $requ->products();
        
        $json = json_encode($request);
        $this->db->update($id,$json);
        $data = [
            "message"=>"Datos han sido actualizados correctamente",
            "data"=> json_decode($json),
            "status"=>203
        ];
        Flight::json($data);
    }
    public function destroy($id){
        $result= $this->db->delete($id);
        Flight::json([
            "message"=>"Los datos eliminados son correctamente",
            "status"=>204
        ]);
    }

}