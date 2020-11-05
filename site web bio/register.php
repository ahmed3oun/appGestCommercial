<?php
include_once ('../dbconnection.php');
$error= false;
if(isset($_POST['btn-register'])) {  //clean user input

    $username = $_POST['uname'];
    $username = strip_tags($username);
    $username = htmlspecialchars($username);

    $password = $_POST['psw'];
    $password = strip_tags($password);
    $password = htmlspecialchars($password);

    $email = $_POST['email'];
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $address = $_POST['address'];
    $address = strip_tags($address);
    $address = htmlspecialchars($address);

    $ville = $_POST['ville'];
    $ville = strip_tags($ville);
    $ville = htmlspecialchars($ville);


    $tel = $_POST['tel'];
    $tel = strip_tags($tel);
    $tel = htmlspecialchars($tel);

    $sql1="select * from user where email='$email' ;";
    $result=mysqli_query($conn,$sql1);
    $count=mysqli_num_rows($result);
    if ($count > 0){
        $error=true;
        $errorMsg = 'Adresse exite déjà';
    }

    // encrypting mdp
    $password=md5($password);

    // insert data no error
    if (!$error){
        $sql="insert into  user ( username, email, password, address, ville, tel) values ( '$username', '$email', '$password', '$address', '$ville', '$tel');";
            if (mysqli_query($conn,$sql)){

            $succesMsg='Registered succesfully' ;
            }}


}
?>
    <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="src\css\all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="src\css\header.css">
  <link rel="stylesheet" type="text/css" href="src\css\login.css">
    <link rel="stylesheet" type="text/css" href="src\css\produit.css">
  <link rel="stylesheet" type="text/css" href="src\css\jquery.bxslider.css">
  <title>Produits Bio By TAAJ</title>

</head>

<body>

<header>
    <div class="topbar-left">
      <ul>
      <li><i class="fa fa-envelope  text-green"></i> TaajBio@gmail.com |
         <i class="fa fa-phone text-green"></i> +216 57 453 007 |
         <i style="font-size: 14px;color: #ED0080;">livraison du Lundi au Vendredi : 9h-12h30 / 13h30-17h</i></li>
      </ul>
    </div>  
    
    <div class="menu_login">
          <a href="index.php" class="header_navbar_menu_link"><i class="fa fa-home text-green"></i> Acceuil</a>
          <a href="#" class="header_navbar_menu_link" id="myBtn"><i class="fa fa-sign-in-alt text-green"></i> Se connecter</a>
          <!-- The Modal -->
          <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
          <span class="close">&times;</span>
                <form action="index.php" method="post">
                          <div class="imgcontainer">
                            <img src="src\img\avatar.png" alt="Avatar" class="avatar">
                          </div>

                          <div class="container">
                            <label for="uname"><b>Nom d'utilisateur</b></label>
                            <input type="text" placeholder="Entrer votre nom" name="uname" required>

                            <label for="psw"><b>Mot de passe</b></label>
                            <input type="password" placeholder="Enter mot de passe" name="psw" required>

                            <button type="submit">S'identifier</button>
                            <label>
                              <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                          </div>

                          <div class="container">
                            <button type="button" class="cancelbtn">Annuler</button>
                            <span class="psw">oublier <a href="#">Mot de passe?</a></span>
                          </div>
                </form>
          </div>

    </div>
          <a href="contact.html" class="header_navbar_menu_link"><i class="fa fa-phone "></i> Contact </a>
    </div>
    

</header>

<div class="panierh1" style="margin-top: 4%;">S'inscrire </div>    
<div class="register">
    <?php if (isset($succesMsg)){ ?>
    <div style="position: relative;
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem;
            color: #065719;
            background-color: #c1edca;
            border-color: #c3e6cb;"   >
        <span class="glyphicon glyphicon-info-sign"></span>
        <?php echo "<center>` $succesMsg `</center>"; ?>
    </div
    <?php } ?>
    <?php if (isset($errorMsg)){ ?>
        <div style="position: relative;
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem;
             color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;" >
            <span class="glyphicon glyphicon-info-sign"></span>
            <?php echo "<center>` $errorMsg `</center>" ; ?>
        </div>
    <?php } ?>


    <form action="register.php" method="post">
                            <div class="polaroid">
                            <img  src="src\img\log.jpg" />
                            <div class="container">
                            <label for="uname"><b>Nom d'utilisateur*</b></label>
                            <input type="text" placeholder="Entrer votre nom" name="uname" required>

                            <label for="psw"><b>Mot de passe*</b></label>
                            <input type="password" pattern=".{5,}" title="cinq ou plus de caractéres" placeholder="Enter mot de passe" name="psw" required>

                            <label for="psw"><b>Email*</b></label>
                            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter votre email" name="email" required>


                            <label for="psw"><b>Adresse*</b></label>
                            <input type="text" placeholder="Enter votre adresse" name="address" required>

                            <label for="psw"><b>Ville*</b></label>
                            <input type="text" placeholder="Enter votre adresse" name="ville" required>
                             
                            <label for="psw"><b>Telephone*</b></label>
                            <input type="text"  pattern="[0-9]{8}" title="sauf des nombres" placeholder="Enter votre numero du telephone" name="tel" required>

                            <button type="submit" name="btn-register">Enregistrer</button>
                            
                          </div>
                          <div class="container">
                            <button type="reset" class="cancelb">Annuler</button>
                          </div>
                </form>
          </div>

    </div>
    </div>


<footer class="footer-distributed" style="margin-top: 10%;">

      <div class="footer-left">

        <h3>Taaj<span>Bio</span></h3>

        <p class="footer-links">
          <a href="#" class="link-1">Acceuil</a>
          
          <a href="#">Cosmétiques </a>
        
          <a href="#">Maquillage </a>
        
          <a href="#">Bébé </a>
          
          <a href="#">Homme</a>
          
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">TaajBio © 2020</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Rue 234 </span> Ariana, tunis</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+216 53 700 977</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="taajbio@gmail.com">taajbio@gmail.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>À propos de notre site</span>
          Produits labellisés et certifiés BIO contre le test sur les animaux fabrication tunisienne
        </p>

        <div class="footer-icons">

          <a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
          <a href="www.twitter.com"><i class="fa fa-twitter"></i></a>
          <a href="www.linkedin.com"><i class="fa fa-linkedin"></i></a>
          <a href="#www.youtube.com"><i class="fa fa-youtube"></i></a>

        </div>

      </div>

    </footer>








<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="src\js\jquery.bxslider.min.js"></script>
<script type="text/javascript" src="src\js\myjs.js"></script>
</body>
</html>
