<?php
$conn= mysqli_connect("localhost","root","","program");
if(!$conn){
    die("could not connect my sql".mysql_error());
}
$result=mysqli_query($conn,"SELECT*FROM alumni");
?>
<!DOCTYPE html>
<html>
<body style="background-color:aqua">
    <a href="Alumni.html">AluHome</a>
<?php
if(mysqli_num_rows($result)>0){
    ?>
    <table border="1px">
    <tr>
    <th>Alumnus name</th>
    <th>Year of enrolment</th>
    <th>Year of graduation</th>
    <th>Headteacher(At enrolment)</th>
    <th>Headteacher(At graduation)</th>
    <th>Famous teacher(At graduation)</th>
    <th>Results</th>
    <th>Current occupation</th>
    <th>Address</th>
    <th>Email</th>
    <th>Mobile no.</th>
    </tr>
    <?php
    $i=0;
    while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
        <td><?php echo $row["AlumnusName"];?></td>
        <td><?php echo $row["yoe"];?></td>
        <td><?php echo $row["yog"];?></td>
        <td><?php echo $row["headteacher@enr"];?></td>
        <td><?php echo $row["headteacher@grad"];?></td>
        <td><?php echo $row["famousTeacher"];?></td>
        <td><?php echo $row["results"];?></td>
        <td><?php echo $row["occupation"];?></td>
        <td><?php echo $row["address"];?></td>
        <td><?php echo $row["email"];?></td>
        <td><?php echo $row["mobile no."];?></td>
        </tr>
        <?php
        $i++;
    }
    ?>
    </table>
    <?php
}
else{echo "no results found";}
?>
</body>
</html>