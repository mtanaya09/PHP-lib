<html>

<body>

    <?php
    class Fruit
    {
        public $color;
        public $name;

        function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        public function intro()
        {
            echo "A {$this->name} is a fruit and the color of the fruit is {$this->color}.";
        }
    }

    class Cherry extends Fruit
    {
        public function message()
        {
            echo "Is cherry is a fruit or a berry?";
        }
    }

    $cherry = new Cherry("Cherry", "Red");
    $cherry->message();
    $cherry->intro();
    ?>

</body>

</html>