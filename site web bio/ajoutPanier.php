<?php
session_start();
include_once '../dbconnection.php';
$sql="select * from products where id=".$_POST['id']."";
$result=mysqli_query($conn,$sql);
$produit=mysqli_fetch_assoc($result);
require_once 'panier.class.php';
//print_r($_SESSION);
//print_r($_POST);
print_r($produit);
$panier = new Panier($_SESSION['username']);

$valeur= array(
    'id' => $produit['id'],
    'nom' => $produit['name'],
    'qte' => $_POST['qte'],
    'prix' => $produit['price'],
    'image' => $produit['image']

);

$panier->set($_POST['id'],$valeur);
echo '<script>window.history.go(-2);</script>';
//header("location:panier.php");
?>
