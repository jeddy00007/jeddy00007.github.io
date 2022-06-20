<?php
$con=mysqli_connect("localhost","root","","program");
if(!$con){
    die("ERROR: COULD NOT CONNECT.".mysqli_connect_error());
}
else{echo "goodie goodie";}
$fName=$_POST['fName'];
$mName=$_POST['mName'];
$sName=$_POST['sName'];
$uName=$_POST['uName'];
$dob=$_POST['dob'];
$pass=$_POST['pass'];
$cv=$_POST['cv'];
$email=$_POST['email'];
$pNo=$_POST['pNo'];
$facebook=$_POST['facebook'];
$twitter=$_POST['twitter'];
$insta=$_POST['insta'];
echo"1";
$sql="INSERT INTO registration VALUES('$fName','$mName','$sName','$uName','$dob','$pass','$cv','$email','$pNo','$facebook','$twitter','$insta')";
echo"2";
$rs = mysqli_query($con,$sql);
echo"3";
if($rs)
{
    echo "contact records inserted";
    include ('regi.html');
}
else{
    echo "ERROR: could not able to execute".mysqli_error($con);
}
mysqli_close($con);
?>