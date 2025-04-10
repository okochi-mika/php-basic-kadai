<?php
class Food {
    // プロパティを定義する
    private $name;
    private $price;

    // コンストラクタを定義する
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // priceを出力するメソッド
    public function show_price() {
        return $this->price;
    }
}
?>

<?php
class Animal {
    // プロパティを定義する
    private $name;
    private $height;
    private $weight;

    // コンストラクタを定義する
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightを出力するメソッド
    public function show_height() {
        return $this->height;
    }
}
?>

<?php
// Foodインスタンスを作成
$food = new Food("Pizza", 1000);

// Animalインスタンスを作成
$animal = new Animal("Lion", 120, 200);

// インスタンスを出力する
echo "Food: " . $food->show_price() . "\n"; // Foodクラスのpriceを出力
echo "Animal: " . $animal->show_height() . "\n"; // Animalクラスのheightを出力

// print_rを使ってインスタンスのプロパティを表示
echo "\nFood Object: ";
print_r($food);

echo "\nAnimal Object: ";
print_r($animal);
?>
