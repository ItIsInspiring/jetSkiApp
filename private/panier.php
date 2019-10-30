<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PANIER </title>
    <!-- PRESENTATION -->
<?php
    require('../inc/head.php')

?>
<!-- CONTENU PRINCIPAL -->
<main class="container">
<h1>PANIER</h1>
<p>Truc Much, voici votre panier</p>
<div class="row">

    <div class="col-md-12">

        <table class="table">
            <tr>
                <th>NOM DU PRODUIT</th>
                <th>PRIX</th>
                <th>ACTION</th>
            </tr>
            <tr>
                <td>NOM DU PRODUIT</td>
                <td>PRIX</td>
                <td><a href="*" class="btn btn-primary">supprimer</a></td>
            </tr>
            <tr>
                <td>NOM DU PRODUIT</td>
                <td>PRIX</td>
                <td><a href="*" class="btn btn-primary">supprimer</a></td>
            </tr>
            <tr>
                <td>NOM DU PRODUIT</td>
                <td>PRIX</td>
                <td><a href="*" class="btn btn-primary">supprimer</a></td>
            </tr>
        </table>

    </div>
</div>
<!-- -->

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <p><a href="*" class="btn btn-primary">CONFRIMER</a></p>
    </div>
    <div class="col-md-4"></div>
</div>

</main>
<!-- FIN CONTENU PRINCIPAL -->
<?php    
    require('../inc/footer.php');
?>