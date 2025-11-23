<?php

class Food {
    public $name;
    public $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        echo "{$this->price}円<br>";
    }
}

class Animal {
    public $name;
    public $height;
    public $weight;

    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
        echo "{$this->height}cm<br>";
    }
}


$food = new Food('じゃがいも', 250);

$animal = new Animal('犬', 60, 15);

echo "<h2>Foodクラスのインスタンス</h2>";
print_r($food);
echo "<br>";

echo "<h2>Animalクラスのインスタンス</h2>";
print_r($animal);
echo "<br>";

echo "<hr>";

echo "<h2>メソッドの実行</h2>";

echo "じゃがいもの価格: ";
$food->show_price();

echo "犬の体高: ";
$animal->show_height();

?>