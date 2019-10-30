<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROFIL CLIENT</title>
    <!-- PRESENTATION -->
<?php
    require('../inc/head.php')

?>
<!-- CONTENU PRINCIPAL -->
<main class="container">
  <h1>PROFIL CLIENT</h1>

  <p>Truc much, voici votre compte client.</p>
  <form>
    
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputNom">Nom</label>
        <input type="text" class="form-control" id="inputNom" placeholder="Nom">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPrenom">Prénom</label>
        <input type="text" class="form-control" id="inputPrenom" placeholder="Prénom">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword">Mot de passe</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe">
      </div>
    </div>

    <div class="form-group">
      <label for="inputAddress">Addresse 1</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Addresse 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Ville</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      
      <div class="form-group col-md-6">
        <label for="inputZip">Code postal</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="dateBirth">Date de naissance</label>
        <input type="date" class="form-control" id="dateBirth">
      </div>
      <div class="form-group col-md-6">
        <label for="inputTel">Téléphone</label>
        <input type="tel" class="form-control" id="inputTel">
      </div>
    </div>

    <div class="form-row">

      <div class="form-group col-md-6">
        <label for="inputPermis">Permis côtier</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
          <label class="form-check-label" for="inlineCheckbox1">oui</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
          <label class="form-check-label" for="inlineCheckbox2">Non</label>
        </div>
      </div>
      <?php /* si la case oui est cochée, demander le n° de permis  */ ?>
      <div class="form-group col-md-6">
        <label for="inputNpermis">N° permis cotier</label>
        <input type="text" class="form-control" id="inputNpermis">
      </div>

    </div>
    
    <div class="form-row col-md-12">
      <p class="text-justify"><button type="submit" class="btn btn-primary">Envoyer</button></p>
    </div>

  </form>
</main>
<!-- FIN CONTENU PRINCIPAL -->
<?php    
    require('../inc/footer.php');
?>