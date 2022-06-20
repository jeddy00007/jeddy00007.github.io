<?php
$con=mysqli_connect("localhost","root","","program");
if(!$con){
    die("ERROR: COULD NOT CONNECT.".mysqli_connect_error());
}
else{echo "goodie goodie";}
$aluName=$_POST['aName'];
$yoe=$_POST['yoe'];
$yog=$_POST['yog'];
$headAe=$_POST['headAe'];
$headAg=$_POST['headAg'];
$famous=$_POST['famous'];
$results=$_POST['division'];
$occu=$_POST['occu'];
$address=$_POST['address'];
$email=$_POST['email'];
$mobile=$_POST['mob'];

$sql="INSERT INTO alumni VALUES('$aluName','$yoe','$yog','$headAe','$headAg','$famous','$results','$occu','$address','$email','$mobile')";

$rs = mysqli_query($con,$sql);

if($rs)
{
    echo "contact records inserted";
}
else{
    echo "ERROR: could not able to execute".mysqli_error($con);
}
mysqli_close($con);
?>