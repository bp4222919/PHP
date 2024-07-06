<?php

include("config.php");

$name = "pankaj";
$age = 20;
$gender = "male";
function myname(){
    echo $GLOBALS['name'];
    echo '<br>';
    echo $GLOBALS['age'];
    echo '<br>';
    echo $GLOBALS['gender'];
}

myname();
?>

<form action="<?php $_SERVER['array.php'] ?>">
    <label for="">name</label>
    <input type="text" value="<?php echo myname() ?>" name="" id="">
    <input type="submit">
</form>


