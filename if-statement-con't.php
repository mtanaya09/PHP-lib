<html>

<body>

    <?php
    //THE BASIC
    // function getMax($num1, $num2)
    // {
    //     if ($num1 > $num2) {
    //         return $num1;
    //     } else {
    //         return $num2;
    //     }
    // }
    // echo getMax(12, 5);

    //MORE IF ELSE
    function getMax($num1, $num2, $num3)
    {
        if ($num1 >= $num2 && $num1 >= $num3) {
            return $num1;
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            return $num2;
        } else {
            return $num3;
        }
    }
    echo getMax(10, 50, 50);
    ?>


</body>

</html>