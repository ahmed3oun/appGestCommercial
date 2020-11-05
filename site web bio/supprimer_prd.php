<?php
session_start();
include_once '../dbconnection.php';
require_once 'panier.class.php';
$panier= new Panier($_SESSION['username']);
//if (isset($_POST['delete-btn'])){
    $id=$_GET['delete_id'] ;
    $panier->delete($id);
    //header("location:panier.php");
    echo "<script>history.back();</script>";
//}
?>
