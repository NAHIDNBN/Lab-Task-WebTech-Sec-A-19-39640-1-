<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dname = "info";


$name = "Nahid";
$dob = "1998-05-02";

$conn = new mysqli($servername, $username, $password, $dname);


$q = "insert into Table (Name, DOB) values ('" . $name . "', '" . $dob . "')";
$result = $conn->query($q);

$q = "update Table set DOB= '" . $dob . "' where name='Rahim' ";
$result = $conn->query($q);



$q = "delete from Table where id=2";
$result = $conn->query($q);

?>
