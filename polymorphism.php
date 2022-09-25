<html>
<body>

<?php
    class Fruit {
        public $color;
        public $name;

        function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        public function intro(){
            echo "A {$this->name} is a fruit and the color of the fruit is {$this->color}.";
        }
    }

    class Cherry extends Fruit {
        public $weight;
        
        public function __construct($name, $color, $weight){
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        public function intro(){
            echo "This fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
        }
            
        }
    $cherry = new Cherry("Cherry", "Redish", 100);
    $cherry->intro();
?>

</body>
</html>