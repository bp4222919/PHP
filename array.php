<?php

include("config.php");

// $color = array("red","blue","pink","gary","black");

// unset($color[2]);

// array_splice($color,0,2);

// array_push($color,"green","light","hello");

// echo $color[7];


// $color[2] = "green";

// var_dump($color);



// foreach($color as $x){
//     echo $x. "<br>";
//     // echo $x = "name" . "<br>";
// }

// $color[2] = "gray";

$info = array(
    "name" => "Sandeep",
    "age" => 25,
    "city" => "Delhi"
);

ksort($info);

// unset($info['city']);

// $info["age"] = 21;

// echo $info["age"];
// echo $info["name"];
// echo $color[4];

// var_dump($color);
var_dump($info);


// function myfun(){
//     echo "Hello World";
// }

// $data = array("hello",232,myfun());

// echo $data[2];

// $num = array(5,6,4,7,36,2,3343);

// sort($num);
// rsort($num);
// asort($num);

// foreach($num as $x){
//     echo $x. ",";
//     // echo $x = "name" . "<br>";
// }






?>

<!-- <h1><?php echo $info["name"]; ?></h1> -->


