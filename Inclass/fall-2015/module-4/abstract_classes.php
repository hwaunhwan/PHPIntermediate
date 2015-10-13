<?php

//abstract shows your intentions behind your codes to other developers

//This class cannot be instantiated because its abstract
abstract class Product
{
    protected $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    protected $price;

    public function __construct($price, $name)
    {
        $this->pirce = $price;
        $this->name = $name;
    }
//This method must be implemented by children
//abstract method can't have anything inside {}
    abstract function getPrice();
//    public function getPrice
//    {
//        return $this->price;
//    }
    public function __construct($price){
        $this->price = $price;
    }
}

class HomePageProduct extends Product
{
  public function getPrice(){
      return $this->price;
  }
}

class ShoppingCartProduct extends Product
{
    public function getPrice()
    {
        $qty = 10;
        return $this->price * $qty;
    }
}

//$product = new Product;  abstract classes cannot be instantiated