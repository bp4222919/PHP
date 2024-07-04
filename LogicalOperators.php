<?php

include("config.php");

// $a = 10;
// $b = 20;

// if(($a<$b) and ($a<$b)){
//     print("TRUE");
// }else{
//     print("FALSE");
// }


// $fabcolor = "blue";

// switch($fabcolor){
//     case "red":
//         print("red color");
//     break;
//     case "blue":
//         print("blue color");
//     break;
//     default:
//     print("not macth color");       
// }



$mark = 91;

switch($mark){
    case(91<=$mark and 100>=$mark):
        print("A+");
        break;
    case(81<=$mark and 90>=$mark):
        print("B");
        break;  
    case(71<=$mark and 80>=$mark):
        print("C");
        break;
    case(51<=$mark and 70>=$mark):
        print("D");
        break;
    default:
        print("F");           
}


?>