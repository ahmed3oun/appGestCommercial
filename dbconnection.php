<?php
$servername='localhost' ;
$username='root';
$password='';

$conn=mysqli_connect($servername,$username,$password);
$conn->select_db('mydb');

if (!$conn){
    echo "error".mysqli_connect_error();
}


?>
