<?php
$conn = mysqli_connect('localhost','root','','program') or die ("Connection Failed:" .mysqli_connect_error());
 
$username = $_POST['username'];

 $phonenumber = $_POST['password'];
 
 $query1= "SELECT uName FROM registration";
 
  $query2= "SELECT  pass FROM registration";
  
  $result1= mysqli_query($conn,$query1);
  
  $result2=  mysqli_query($conn,$query2);
  
  $another = array();
  for($i=0;$i<11;$i++){
      $another[$i]= (string)mysqli_fetch_column($result1);

  }
  $passKey = array();
  for($i=0;$i<11;$i++){
    $passKey[$i]= (string)mysqli_fetch_column($result2);

}
$free=null;
for($i=0 ; $i<11; $i++){
    if($another[$i]=== $username && $passKey[$i]===$phonenumber){
        include('Alumni.html');
        $free = 'something';
    
    }
}
if($free==null){
    echo "wrong credentials";
}



     ?>