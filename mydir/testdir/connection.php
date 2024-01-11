<?php 

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "myschoolprojecte";


$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{

echo "connection is done";
}
else
{

echo "connection failed".mysqli_connet_error();
}


?>