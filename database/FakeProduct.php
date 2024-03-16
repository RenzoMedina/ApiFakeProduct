<?php

namespace database;
use Faker\Factory;
use app\model\Product;
class FakeProduct{
    public $faker;
    public $product;
    public $list =[];
    public function __construct(){
        $this->faker = Factory::create();
        $this->product = new Product();
    }

    public function products(){
        for ($i = 0; $i < 1; $i++){
           $list[0]= $this->faker->name ;  
           $list[1]= $this->faker->randomFloat(2) ; 
           $list[2]= $this->faker->numberBetween(0, 200) ; 
           $list[3]= $this->faker->text(100) ; 
        }
        $this->product = $list;
        return $this->product;
        
    }
}
