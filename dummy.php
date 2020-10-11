<?php

$con=new mysqli("localhost","root","","primary");
$result=$con->query("SELECT * FROM personal");
//query() or mysqli_query() function performs a query against a database
$kgidno=$_POST['kgidno'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$adharno=$_POST['adharno'];
$dob=$_POST['dob'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$des=$_POST['des'];

if(isset($_POST['submit'])){
    $res=$con->query("INSERT INTO `personal` (`kgidno`,`fname`,`lname`,`adharno`,`dob`,`mob`,`email`,`des`) VALUES ('$kgidno','$fname','$lname','$adharno','$dob','$mob','$email','$des')");

}

function checkValid($nameCheck)
{
    $con1=mysqli_connect("localhost","root","","primary");

    $result1=mysqli_query($con1,"SELECT * FROM personal");
    $end=true;

    while($row=mysqli_fetch_array($result1) && $end){
        $end=false;
    }
    return $end;
}

?>