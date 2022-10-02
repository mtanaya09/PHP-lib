<?php

//class - is a blueprint specification for what book or computer in our program

class Computer
{
    var $ram;
    var $cpu;
    var $videoCard;
}


//object - instant of the class

$pcKel = new Computer;
$pcKel->ram = "16gb";
$pcKel->cpu = "ryzen 5";
$pcKel->videoCard = "radeon 480";

echo $pcKel->videoCard;
