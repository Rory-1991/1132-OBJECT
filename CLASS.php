<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
interface Animal {
    public function sound();  // 定義方法，但沒有實現
    public function jump();  // 定義方法，但沒有實現
}

class Dog implements Animal {
    public function sound() {
        echo "Woof!";}
    public function jump() {
        echo "Dog jump 1m";
    }
}

class Cat implements Animal {
    public function sound() {
        echo "Meow!";}
    public function jump() {
        echo "Cat jump 2m";
    }
}

/* $dog = new Dog();
$dog->sound();  // 輸出 "Woof!"
$dog->jump();  

$dog = new Cat();
$dog->sound();  // 輸出 "Woof!"
$dog->jump();  */


// 取代上方
$animals = [new Dog(), new Cat()];  // 可以將不同的動物放到一個陣列中

foreach ($animals as $animal) {
    $animal->sound();  // 輸出相應的 sound
    echo " ";  // 換行或分隔
    $animal->jump();   // 輸出相應的 jump
    echo "<br>";  // 顯示換行
}
?>


</body>
</html>