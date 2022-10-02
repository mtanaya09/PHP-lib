<?php
// class Computer
// {
//     function __construct($cpu, $ram, $videoCard)
//     {
//         $this->cpu = $cpu;
//         $this->ram = $ram;
//         $this->videoCard = $videoCard;
//     }
// }

// $pcKel1 = new Computer("ryzen 5", "16gb", "radeon 480");
// echo "$pcKel1->ram <br>";
// echo "$pcKel1->cpu <br>";

class Teacher
{
    function __construct($section, $licenceNo, $age)
    {
        $this->section = $section;
        $this->licenceNo = $licenceNo;
        $this->age = $age;
    }
}

$rina = new Teacher("4a", "55555", "22");
echo "Our section is $rina->section and rina age that time is $rina->age then her licence number is $rina->licenceNo";
