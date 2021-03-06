<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Panier HTML5 + JavaScript</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="panier.js"></script>
        <script type="text/javascript">

        </script>
    </head>
    <body>
        <section  class="container">
            <article class="well form-inline pull-left col-lg-5">
                <legend>Gestion du panier</legend>
                <label class="col-lg-3">Identifiant</label> : <input type = "number" id = "id" style="width:120px" class="input-sm form-control"></input><br><br>
                <label class="col-lg-3" >Quantité</label> : <input type = "number" id = "qte" style="width:120px" class="input-sm form-control"></input><br><br> 
                <label class="col-lg-3">Prix</label> : <input type = "number" id = "prix" style="width:120px" class="input-sm form-control"></input><br><br>
                <button class="btn btn-primary" type="submit" onclick="ajouter()"><span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier</button>
            </article>
        </section>
        <section class="container">
            <article class="well form-inline pull-left col-lg-5">
                <legend>Contenu du panier</legend>
                <table id="tableau" class="table">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Qte</th>
                            <th>Prix unitaire</th>
                            <th>Prix de la ligne</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                </table>
                <br><label>Prix du panier total</label> : <label id = "prixTotal"></label>
                <label id = "nbreLignes" hidden>0</label>
            </article>
        </section>
        <div class="cart-row">
            <div class="cart-item cart-column">
                <img class="cart-item-image" src="src\img\sv\1.jpg" title="Soin lissant contour des yeux et lèvres 30 ml" width="100" height="100">
                <span class="cart-item-title">album</span>
            </div>
            <span class="cart-price cart-column"></span>
            <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="2">
            <button class="btn btn-danger" type="button">remove</button>
            </div>
        </div>
    <div class="cart-total">
        <strong class="cart-total-title">Total</strong>
        <span class="cart-total-price">$33</span>
    </div>
        


    </body>
</html>