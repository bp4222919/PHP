<?php 
include("config.php");

if(isset($_POST['save'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];

    $myquery = "INSERT INTO about(first_name,last_name,city,pin) VALUES('$fname','$lname','$city','$pin')";

    $sql = mysqli_query($conn,$myquery);

    if($sql){
        echo 'Data Inserted';
    }
    else{
        echo 'Data Not Inserted';
        }
}

?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<label>First Name</label>
<input type="text" name="fname" required><br><br>

<label>Last Name</label>
<input type="text" name="lname" required><br><br>

<label>City</label>
<input type="text" name="city" required><br><br>

<label>Pin</label>
<input type="text" name="pin" required><br><br>

<input type="submit" name="save" required> 

</form>