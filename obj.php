<html>

<body>

    <h1>The fruit program</h1>

    <?php
    class Fruit
    {
        public $name; // - property
        public $color; // - property

        function set_name($name)
        { // - method
            $this->name = $name;
        }

        function get_name()
        { // - method
            return $this->name;
        }
    }

    $apple = new Fruit();
    $banana = new Fruit();

    $apple->set_name('Apple');
    $banana->set_name('Banana');

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();

    ?>

</body>

</html>