<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>從子類別繼承過來的屬性或方法的存取權限不能比父類別更嚴格</h1>
    <?php
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    protected function speak() {
        echo "動物叫：$this->name<br>";
    }
}

class Dog extends Animal {
    public function introduce() {
        echo "狗的名字是：$this->name<br>";  // 這裡可以訪問 protected 屬性
        $this->speak();  // 這裡可以訪問 protected 方法
    }
}

$dog = new Dog("小狗");
$dog->introduce();  // 可以正常執行，因為子類別可以使用父類別的 protected 屬性和方法
?>
</body>
</html>