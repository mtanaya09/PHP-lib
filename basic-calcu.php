<html>

<body>

    <form action="basic-calcu.php" method="post">
        First Num: <input type="number" step="0.001" name="num1"> <br><br>
        OP: <input type="text" name="op"> <br><br>
        Operators: <br>
        + for addition <br>
        - for subtraction <br>
        * for multiplication <br>
        / for division <br><br>
        Second Num: <input type="number" name="num2"> <br><br>
        <input type="submit">
    </form>

    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];

    if ($op == "+") {
        echo $num1 + $num2;
    } elseif ($op == "-") {
        echo $num1 - $num2;
    } elseif ($op == "/") {
        echo $num1 / $num2;
    } elseif ($op == "*") {
        echo $num1 * $num2;
    } else {
        echo "invalid operator";
    }
    ?>

</body>

</html>