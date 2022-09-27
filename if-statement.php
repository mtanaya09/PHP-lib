<html>

<body>

    <?php
    $isMale = false;
    $isTall = true;
    if ($isMale && $isTall) {
        echo "Your are a TALL MALE";
    } elseif ($isMale && !$isTall) {
        echo "You are a SHORT MALE";
    } elseif (!$isMale && $isTall) {
        echo "Your not MALE but you are TALL";
    } else {
        echo "Your are not male and not tall";
    }
    ?>

</body>

</html>