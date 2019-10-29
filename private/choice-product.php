<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Choix par équipement</title>
    <!-- PRESENTATION -->
<?php
    require('../inc/head.php')

?>
<!-- CONTENU PRINCIPAL -->
<main class="container">
  <h1>Choix par équipement</h1>
  <div class="row">

    <div class="col-md-8">

      <div class="equipement row">
        <div class="equipement-img col-md-4">
          <img src="/images/jetski-rouge.jpg">
        </div>
        <div class="equipement-content col-md-5">
          <ul>
            <li>Nom: </li>
            <li>Description : </li>
            <li>puissance : </li>
            <li>État : </li>
            <li>HT : </li>
          </ul>
        </div>
        <div class="equipement-btn col-md-3">
          <a href="*" class="btn btn-primary">choisir</a><br>
          <a href="*" class="btn btn-primary">voir la fiche</a>
        </div>
      </div>  
      
      <div class="equipement row">
        <div class="equipement-img col-md-4">
          <img src="/images/jetski-bleu.jpg">
        </div>
        <div class="equipement-content col-md-5">
          <ul>
            <li>Nom: </li>
            <li>Description : </li>
            <li>puissance : </li>
            <li>État : </li>
            <li>HT : </li>
          </ul>
        </div>
        <div class="equipement-btn col-md-3">
          <a href="*" class="btn btn-primary">choisir</a><br>
          <a href="*" class="btn btn-primary">voir la fiche</a>
        </div>
      </div>  

      <div class="equipement row">
        <div class="equipement-img col-md-4">
          <img src="/images/jetski-vert.jpg">
        </div>
        <div class="equipement-content col-md-5">
          <ul>
            <li>Nom: </li>
            <li>Description : </li>
            <li>puissance : </li>
            <li>État : </li>
            <li>HT : </li>
          </ul>
        </div>
        <div class="equipement-btn col-md-3">
          <a href="*" class="btn btn-primary">choisir</a><br>
          <a href="*" class="btn btn-primary">voir la fiche</a>
        </div>
      </div>  

    </div>
    <div class="col-md-4">
       <?php include ('../inc/annonces.php'); ?>
    </div>
  </div>



</main>
<!-- FIN CONTENU PRINCIPAL -->
<?php    
    require('../inc/footer.php');
?>