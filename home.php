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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teacher record</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
<h1>STATE GOVERNMENT PRIMARY SCHOOL TEACHERS RECORDS</h1>
    
    
    <form action="" method="post">
    <div class="container">
        <br>
        <h3 id="header"> all fields are mandatory*</h3>
        <br>
        <span><label for="kgidno">KGID NO:</label></span><br>
       <span> <input  type="text" name="kgidno"  id="kgidno" placeholder="enter your KGID no" required></span><br><br>
       
        <span><label for="fname">FIRST NAME:</label></span><br>
        <span><input type="text" name="fname" id="fname" placeholder="enter your first name" required></span>
        <br> <br>
        <span><label for="lname" >LAST NAME:</label></span><br>
        <span><input type="text" name="lname" id="lname" placeholder="enter your last name" required ></span>
        <br> <br>
        <span><label for="adharno">ADHAR NO:</label></span><br>
        <span><input type="text" name="adharno" id="adharno" placeholder="enter your Adhar no" required></span>
        <br> <br>
        <span><label for="dob">DATE OF BIRTH:</label></span><br>
       <span> <input type="date" name="dob" id="dob" placeholder="enter yout date of birth" required></span>
        <br> <br>
        <span><label for="contact">MOBILE NO:</label></span><br>
       <span> <input type="text" name="mob" id="contact" placeholder="enter your 10 digit mobile no"></span>
        <br> <br>
        <span><label for="email">EMAIL:</label></span> <br>
        <span><input type="email" name="email" id="email" placeholder="enter your email" required></span>
        <br> <br>
        
        <h3>DESIGNATION:</h3>
            <span class="des">
            <input type="radio" name="des" id="des" value="head">HEAD
            <input type="radio" name="des" id="des" value="assoc">ASSOCIATED
            <input type="radio" name="des" id="des" value="other">OTHER
            </span>
        
            <br> <br><br> <br> 
           <input type="submit" name="submit">
           
        
           </div>  
    </form>
    <br>
    <br><br><br>
    <footer id="foot">
        <h2><img src="logo.jpg" height="2%" width="2%" > GOVERNMENT OF KARNATAKA</h2>
        
    </footer>
    
</body>
</html>
  




 