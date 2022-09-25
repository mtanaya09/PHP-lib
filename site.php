<!-- /* $name = "mic";
    $year = 3;

    echo "youu $name grind grind muna <br>";
    echo "youu $name grind grind muna <br>";
    echo "ilang taon? $year years haha <br>";
    $name = "kels";
    echo "youu $name grind grind muna <br>";
    echo "$year sa seven seven or prescribe D.";

    functions
    - strtolower
    - strtoupper
    - strlen
    - strrev | $new = strrev($sentence);
    - str_replace | echo str_replace("Years", "taon", $sentence);
    - substr | echo substr($sentence, 8, 4);
    - abs = absolute
    - pow (2,4) = power
    - sqrt (144)
    - min or max (2, 10)
    - ceil or floor = round up and down


    $sentence = "4 Years sa Seven Seven or prescribe D.";
    $sentence[0] = 1;
    echo str_replace("Years", "taon", $sentence);

    */ -->

<html>

<body>

    <!-- <form action="site.php" method="get">
        Name: <input type="text" name="name">
        <br>
        Age: <input type="text" name="age">
        <input type="submit">
    </form>
-->
    <form action="site.php" method="get">
        Num 1: <input type="number" name="num1">
        <br>
        Num 2: <input type="number" name="num2">
        <input type="submit">
    </form>
    <br>

    <?php
    $sum = $_GET["num1"] + $_GET["num2"];
    echo $sum;
    ?>



</body>

</html>