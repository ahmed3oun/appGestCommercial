<?php
session_start();
include_once '../dbconnection.php';
include_once 'panier.class.php';
//if(isset($_POST['command-btn'])){
    $id_p=$_GET['product_id'];
    $panier = new Panier($_SESSION['username']);
    $produit=$panier->get($id_p);
    print_r($produit);
    print_r($_SESSION);
    $sql="SELECT `id` ,`username`, `email`,  `address`, `ville`, `tel`   FROM `user` WHERE `id`=".$_SESSION['id'];
    $result=mysqli_query($conn,$sql);
    $user=mysqli_fetch_assoc($result);
    print_r($user);
    $prixGlobal=$produit['qte']*$produit['prix'];
    $id_c=$_SESSION['id'];
    $nom_p=$produit['nom'];
    $qte_p=$produit['qte'];
    $sql2="INSERT INTO commands(id_client,id_product,p_name,p_quantity,price) VALUES ('$id_c','$id_p','$nom_p','$qte_p','$prixGlobal')";
    if(mysqli_query($conn,$sql2)){
        $panier->delete($id_p);
        sleep(0);
        echo "<script>history.back();</script>";

     }else{
      echo 'La command nest pas envoye';



}
?>
