<?php

namespace database;
use Faker\Factory as Faker;
use app\model\Product;
class FakeProduct{
    public $faker;
    public $product;
    public $list;
    public function __construct(){
        $this->faker = Faker::create();
        $this->product = new Product();
    }

    public function products(){
           $this->product->name = $this->faker->name ;  
           $this->product->price= $this->faker->randomFloat(2) ; 
           $this->product->quantity= $this->faker->numberBetween(0, 200) ; 
           $this->product->description= $this->faker->text(100) ; 
           
        return $this->product;
        
    }
}
