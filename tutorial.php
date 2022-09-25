<?php
/*
$num = array (10,2,180,29,5,1);
sort($num);

$new_num = count($num);

for ($x = 0; $x < $new_num; $x++){
    echo $num[$x] . "<br>";
}

?> -->

<?php
// $stage = 1;

// switch($stage){
//     case 1: 
//         echo "cute 1";
//         break;
//     case 2:
//         echo "cute 2";
//         break;
//     case 3:
//         echo "cute 3";
//         break;
//     case 4:
//         echo "cute 4";
//         break;
//     default:
//         echo "bawal yan";
// }

//////////////////////////////////////////

//WHILE LOOPS

$var = 5;

while ($var <= 8){
    echo "$var <br>";
    $var++;
    
}


$var = 12;
do {
    echo "$var <br>";
    $var++;
}while($var <= 10);


// for loops

for ($var = 1; $var <=100; $var++){
    echo "Number $var <br>";
}

*/

//FUNCTION

function called()
{
    for ($num = 1; $num <= 10; $num++) {
        echo "Numero: $num <br>";
    }
}

called();

echo "cute mo po <br>";

called();
