<?php
class Food{
    private $name;
    private $price;

    public function show_price(){
        echo $this->price."<br>";
    }

    public function __construct($name,$price){
        $this->name = $name;
        $this->price = $price;
    }
}

class Animal{
    private $name;
    private $height;
    private $weight;

    public function show_height(){
        echo $this->height."<br>";
    }

    public function __construct($name,$height,$weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
}


$food = new Food("potato",250);  //$foodという名前のインスタンスを作成。
print_r($food);
echo"<br>";

$animal = new Animal("dog",60,5000); //$animalという名前のインスタンスを作成。
print_r($animal);
echo"<br>";



$food->show_price();
echo"<br>";

$animal->show_height();
echo"<br>";


