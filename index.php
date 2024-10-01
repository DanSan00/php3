<?

session_start();
require_once 'database/database.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?
    
    class Animal{
    public $weight;
    public $age;
    public $color;
    
        public function __construct($weight,$age,$color){
            $this->weight = $weight;
            $this->age = $age;
            $this->color = $color;
        }
        
        public function displayInfo()
        {
            echo "Вес: {$this->weight}  кг; Возраст: {$this->age} лет; Окраска: {$this->color} <br>";
        }
    }

    class Lion extends Animal
    {
        public $size;

        public function __construct($weight, $age, $color, $size){
            parent:: __construct($weight,$age, $color);
            $this->size=$size;
        }

        public function roar(){
            return "Лев. Размер: {$this->size} см";
        }
    }

    class Rabbit extends Animal
    {
        public $us;

        public function __construct($weight, $age, $color,$us){
            parent::__construct($weight,$age, $color);
            $this->us=$us;
        }

        public function jump(){
            return "Заяц. Размер: {$this->us} см";
        }
    }

    class Wolf extends Animal
    {
        public $po;

        public function __construct($weight, $age, $color,$po){
            parent::__construct($weight,$age, $color);
            $this->po = $po;
        }

        public function wo(){
            return "Волк. Размер: {$this->po} см";
        }
    }

    $lion = new Lion(18, 23, 'Golden', 150);
    $rabbit = new Rabbit(2, 23, 'Golden', 70);
    $Wolf = new Wolf(4, 56, 'Golden', 160);

    echo "<h2>Лев</h2>";
    echo "<p>" . $lion->displayInfo() . "</p>";
    echo "<p>" . $lion->roar() ."</p>";

    echo "<h2>Заяц</h2>";
    echo "<p>" . $rabbit->displayInfo() . "</p>";
    echo "<p>" . $rabbit->jump() ."</p>";

    echo "<h2>Волк</h2>";
    echo "<p>" . $Wolf->displayInfo() . "</p>";
    echo "<p>" . $Wolf->wo() ."</p>";

    
    
    ?>
</body>
</html>