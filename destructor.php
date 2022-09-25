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

        function __destruct()
        {
            echo "the fruit is {$this->name} and the color is {$this->color}.";
        }
    }

    $strawberry = new Fruit("Strawberry", "Pink");
    ?>

</body>

</html>