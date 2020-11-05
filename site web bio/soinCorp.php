<?php
session_start();
include_once ("../dbconnection.php");
$error=false;
if (isset($_POST['logout'])){

    session_destroy();
    echo '<script>location.href="index.php"</script>';
}
if (isset($_POST['btn-login'])){

    $uname=trim($_POST['uname']);
    $uname= htmlspecialchars(strip_tags($uname));

    $psw=trim($_POST['psw']);
    $psw= htmlspecialchars(strip_tags($psw));
    $psw=md5($psw);

    $sql="select * from user where email='$uname' OR username='$uname'";
    $result=mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    //echo $count;
    $row = mysqli_fetch_assoc($result);
    if(($count == 1  ) && ($row['password']==$psw)){
        $_SESSION['username']=$row['username'];
        $_SESSION['id']=$row['id'];
        header("location:index.php");
    }else{
        $error=true;
    }
}

$sql2="select * from products where category=\"Soin de corps\"";
$result2=mysqli_query($conn,$sql2);
$numrow2=mysqli_num_rows($result2);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="src\css\all.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="src\css\header.css">
    <link rel="stylesheet" type="text/css" href="src\css\login.css">
    <link rel="stylesheet" type="text/css" href="src\css\produit.css">
    <link rel="stylesheet" type="text/css" href="src\css\jquery.bxslider.css">
    <title>Produis Bio By TAAJ</title>
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
        <?php if (empty($_SESSION['username'])){ echo '<a href="#" class="header_navbar_menu_link" id="myBtn"><i class="fa fa-sign-in-alt text-green"></i>Se connecter</a>'; }
        else {echo "<span style='color: #FFFFFF' class='header_navbar_menu_link'>".$_SESSION['username']."</span>";}?>
        <?php if (empty($_SESSION['username'])){echo'  <!-- The Modal -->
          <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
                <form action="index.php" method="post">
                          <div class="imgcontainer">
                            <img src="src/img/avatar.png" alt="Avatar" class="avatar">
                          </div>

                          <div class="container">
                            <label for="uname"><b>Nom d utilisateur</b></label><br>
                            <input type="text" style="width: 100mm" placeholder="Entrer votre nom" name="uname" required><br>

                            <label for="psw"><b>Mot de passe</b></label><br>
                            <input type="password" style="width: 100mm" placeholder="Enter mot de passe" name="psw" required>

                            <br>
                          </div>

                          <div class="container">
                              <button name="btn-login" type="submit" style="width: 40mm;height: 13mm">S identifier</button>
                             <!-- <label>
                                  <input type="checkbox" checked="checked" name="remember"> Remember me
                              </label>-->
                            <button type="button" style="width: 40mm; height: 13mm" class="cancelbtn">Annuler</button>
                            <span class="psw">oublier <a href="#">Mot de passe?</a></span>
                          </div>
                </form>
          </div>

    </div>';}?>


        <?php if (empty($_SESSION['username'])){ echo '<a href="register.php" class="header_navbar_menu_link" id ="btnR"><i class="fa fa-user text-green"></i> Créer un compte</a>';} ?>
        <a href="panier.php" class="header_navbar_menu_link">   <i class="fa fa-shopping-cart"></i> Panier</a>
        <?php if (!empty($_SESSION['username'])){
            echo '<div class="navigation" > <div class="header_navbar_menu_link">
              
              <form action="index.php" method="post" >
                  <button name="logout" style="
                background-color: #000000;
                color: white;
                padding: 0px 20px; 
                margin: 0px 0; 
                border: none;
                cursor: pointer;
                width: 100%;
                    " type="submit" >
                     <!-- <span class="glyphicon glyphicon-log-out"></span><span class="header_navbar_menu_link">Se déconnecter</span>-->
                     <svg xmlns="http://www.w3.org/2000/svg" x="10px" y="10px"
width="20" height="20"
viewBox="0 0 172 172"
style=" fill:#000000;"><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="" fill="none"></path><path d="M86,107.5c-11.87412,0 -21.5,-9.62588 -21.5,-21.5v0c0,-11.87412 9.62588,-21.5 21.5,-21.5v0c11.87412,0 21.5,9.62588 21.5,21.5v0c0,11.87412 -9.62588,21.5 -21.5,21.5z" fill="none"></path><path d="M86,104.06c-9.97426,0 -18.06,-8.08574 -18.06,-18.06v0c0,-9.97426 8.08574,-18.06 18.06,-18.06v0c9.97426,0 18.06,8.08574 18.06,18.06v0c0,9.97426 -8.08574,18.06 -18.06,18.06z" fill="none"></path><g fill="#2ecc71"><path d="M85.91042,11.38828c-1.74948,0.02744 -3.3907,0.85217 -4.45677,2.23958c-0.0075,0.01117 -0.01497,0.02237 -0.02239,0.03359l-22.41823,22.41823c-1.49776,1.43802 -2.1011,3.57339 -1.57732,5.58258c0.52378,2.00919 2.09283,3.57824 4.10202,4.10202c2.00919,0.52378 4.14456,-0.07955 5.58258,-1.57731l13.14636,-13.14635v60.69271c-0.02924,2.06765 1.05709,3.99087 2.843,5.03322c1.78592,1.04236 3.99474,1.04236 5.78066,0c1.78592,-1.04236 2.87225,-2.96558 2.843,-5.03322v-60.69271l13.14636,13.14635c1.43802,1.49776 3.57339,2.1011 5.58258,1.57731c2.00919,-0.52378 3.57824,-2.09283 4.10202,-4.10202c0.52378,-2.00919 -0.07955,-4.14456 -1.57732,-5.58258l-22.42942,-22.42943c-1.10213,-1.44896 -2.82684,-2.28846 -4.64714,-2.26198zM34.43359,44.20938c-1.89052,0.00246 -3.65833,0.93663 -4.72552,2.49714c-7.81491,11.10441 -12.50807,24.64526 -12.50807,39.29349c0,37.92867 30.87133,68.8 68.8,68.8c37.92867,0 68.8,-30.87133 68.8,-68.8c0,-14.64823 -4.69316,-28.18908 -12.50808,-39.29349c-1.82132,-2.59128 -5.39843,-3.21546 -7.98971,-1.39414c-2.59128,1.82132 -3.21546,5.39843 -1.39414,7.98971c6.54135,9.29479 10.42526,20.49121 10.42526,32.69792c0,31.73133 -25.60201,57.33333 -57.33333,57.33333c-31.73133,0 -57.33333,-25.60201 -57.33333,-57.33333c0,-12.20671 3.8839,-23.40313 10.42526,-32.69792c1.26273,-1.74707 1.4389,-4.05474 0.45602,-5.97325c-0.98288,-1.91851 -2.95873,-3.12366 -5.11435,-3.11946z"></path></g></g></g></svg>
                 <span style="color: #FFFFFF;font-size: 15px">Déconnection</span>
                  </button>
              </form>
          </div></div>';
        }?>
    </div>

</header>
<?php
if($error){
    echo '<div class="container"> <div class="alert alert-danger" role="alert">
 <center> Authentification ou mot de passe invalide</center>
</div></div>';
}
?>

<div id="logo">  <img src="src\img\taj.gif">
    <div id="search">
        <form action="">
            <input class="search-area" type="text" name="text" placeholder="cherche ici...">
            <input class="search-btn" type="submit" name="submit" value="search">
        </form>
      </div>
     </div><div id="slider">
        <div class="header_navbar_menu">
          <ul>
              <li><a href="index.php" class="active"><i class="fa fa-home text-green"></i> Acceuil</a> </li>
              <li><a href="" class="active">Cosmétiques <i class="fa fa-angle-down"></i></a>
                 <div class="sou-menu">
                      <ul>
                      <li><a href="produit.php">Soin du visage</li></a>
                      <li><a href="soinCorp.php">Soin du corps</li></a>
                      <li><a href="soinCh.php">Soin du cheveux</li></a>
                      </ul>
                  </div>
              </li>
         <li> <a href="" class="active">Maquillage <i class="fa fa-angle-down"></i></a>
         <div class="sou-menu">
                      <ul>
                      <li><a href="maqYeux.php">Maquillage des yeux</li></a>
                      <li><a href="maqTeint.php">Maquillage du teint</li></a>
                      <li><a href="maqLevre.php">Maquillage des lévres</li></a>
                      </ul>
                  </div>
                </li>
          <li> <a href="" class="active">Bébé <i class="fa fa-angle-down"></i></a>
         <div class="sou-menu">
                      <ul>
                      <li><a href="bainB.php">Le bain de bébé</li></a>
                      <li><a href="soinB.php">Le soins de bébé</li></a>
                      </ul>
                  </div>
                </li>
         <li> <a href="" class="active">Homme <i class="fa fa-angle-down"></i></a>
         <div class="sou-menu">
                      <ul>
                      <li><a href="soinHomme.php">Soin du visage homme</li></a>
                      <li><a href="soinCapHomme.php">Soin capillaire homme</li></a>
                      <li><a href="soinPBHomme.php">Soins pour la barbe</li></a>
                      </ul>
                  </div>
                </li>
         <li><a href="contact.php" class="active">Contact <i class="fa fa-angle-down"></i></li></a>
        </ul>
        </div>
        <div class="slider fade">
          <img class="slides fade" src="src\img\sc\cp.jpg" style="width: 45%; border: 1px solid white;"/>
          <img class="slides fade" src="src\img\sc\cp1.jpg" style="width: 45%; border: 1px solid white;"/>
                    <button class="btn" onclick="plusIndex(1)" id="btn2"> &#10095; </button>
          <div class="soins">
              <strong>Soins du corps</strong>
              <p> Les soins corps biologiques vous apportent protection et instants de bien-être. Des soins corps relaxant, tonifiant ou amincissant c’est à vous de choisir l’ambiance. Notre large choix de soins cosmétiques naturels pour le corps vous assure des soins adaptés à votre peau. Un bain, un gommage, un lait hydratant…du bien-être à la beauté.</p>
          </div>
        </div>

        <div class="center" style="color: black; font-size: 15px;"><a href ="index.php">Aceuill ></a><a href ="index.html"> Cosmétique ></a><a href ="index.html">Soincorpe ></a></div>

    <div class="panierh1">NOS PRODUITS</div>

    <?php if($numrow2>0){
        while ($produit=mysqli_fetch_assoc($result2)){
            ?>
            <div class="test"style="margin-bottom: 9%;">
                <ul>
                    <li><div class="imgbox">
                            <img src="../admin/images/<?php echo $produit['image'];?>" alt="On excuse pour l'image">

                        </div>
                    </li>
                    <li><div class="star">
                            <img src="src\img\sv\stars_5.gif" title="" width="85" height="15">
                            <div class="mark k"><strong><?php echo $produit['name'];?></strong></div>
                            <div class="definition"><span><?php echo $produit['description'];?></span>
                                <div class="prix"><strong><?php echo $produit['price'];?> dt</strong></div>
                            </div>
                    </li>
                    <li><div class="pink">
                            <a class="bt" href="gestionPanier.php?id=<?php echo $produit['id'];?>"><i class="fa fa-shopping-cart"></i> AJOUTER AU PANIER</a>

                        </div>
                    </li>
                </ul>
            </div>
            <?php
        }

    }?>

    </div>
      
       



<footer class="footer-distributed" style="margin-top: 155%;">

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
