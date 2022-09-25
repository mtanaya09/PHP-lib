<html>

<body>
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

     -->

    <!-- <form action="site.php" method="get">
        Name: <input type="text" name="name">
        <br>
        Age: <input type="text" name="age">
        <input type="submit">
    </form>

    <form action="site.php" method="get">
        Num 1: <input type="number" name="num1">
        <br>
        Num 2: <input type="number" name="num2">
        <input type="submit">
    </form>
    <br>

    -->
    <!-- math lib game -->
    <!-- <form action = "site.php" method="get">
        Color: <input type="text" name="color"> <br>
        Plural Noun: <input type="text" name="pluralNoun"> <br>
        Celebrity: <input type="text" name="celebrity"> <br>
        <input type="submit">
    </form> 

    <br>

    <?php 
    $color = $_GET['color'];
    $pluralNoun = $_GET['pluralNoun'];
    $celebrity = $_GET['celebrity'];

    echo "Roses are $color <br>";
    echo "$pluralNoun are blue <br>";
    echo "I love $celebrity <br>";
    ?> -->

    <!-- URL PARAMETER | GET and POST -->
    <!-- <form action="site.php" method="post">
        Name: <input action type="password" name="password">
            <input action type="submit">
    </form> -->

    <?php
        $kaibigans = array("moi","kap","pol","roj");
        
        
        $new_trops = count($kaibigans);
        for($x = 0; $x < $new_trops; $x++ ){
            echo $kaibigans[$x] ."<br>";
        }
    ?>

</body>

</html>