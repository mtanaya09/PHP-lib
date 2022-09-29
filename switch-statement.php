<html>

<body>
    <form action="switch-statement.php" method="POST">
        Your Grade uwu
        <input type="text" name="grade">
        <input type="submit">
    </form>

    <?php
    $grade = $_POST['grade'];
    switch ($grade) {
        case "A":
            echo "laas mo naman";
            break;
        case "B":
            echo "pwedi pa, laban lang";
            break;
        case "C":
            echo "ayaw mo na ata ihh";
            break;
        default:
            echo "wala ka pang grade";
    }
    ?>

</body>

</html>