<?php
include_once("templates/header.php");
include_once("api.php");
?>

       <?php foreach ($resultado->results as $personagem): ?>
               
        <div>
        <img src="<?= $personagem->image ?>">
        </div>
        
        

    <div class="card movie-card">
    <div class="card-img-top" style="background-image: "></div>
    <div class="card-body">
    <p class="card-rating">
    </p>
    <h5 class="card-title">
      <li> <?= $personagem->name ?></li>
      <li> <?= $personagem->status ?></li>
      <li> <?= $personagem->species ?></li>
      <li> <?= $personagem->origin->name ?></li>
    </h5>
  </div>
</div>
        <?php endforeach; ?>
    