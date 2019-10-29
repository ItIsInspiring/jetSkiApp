<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiche d'équipement</title>
    <!-- PRESENTATION -->
<?php
    require('../inc/head.php')

?>
<!-- CONTENU PRINCIPAL -->
<main class="container">
    
    <h1>FICHE D'ÉQUIPEMENT</h1>

    <div class="row">

        <div class="col-md-9">

            <div class="equipement-img h300"><img src="/images/jetski-rouge.jpg"></div>
         
            <ul>
                <li>Nom: </li>
                <li>Description : </li>
                <li>puissance : </li>
                <li>État : </li>
                <li>HT : </li>
            </ul>
            
            <a href="*" class="btn btn-primary">choisir</a><br>
        </div> 
        
        <div class="col-md-3">
            <?php include ('../inc/annonces.php'); ?>
        </div>

    </div>

</main>
<!-- FIN CONTENU PRINCIPAL -->
<?php    
    require('../inc/footer.php');
?>