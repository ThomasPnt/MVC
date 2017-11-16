
</body>
</html>

<div class="PageStock">
<h1>Objets</h1>
  <form class="rechercheStock" action="stock.php" method="get">
    <label>Fouiller le stock</label><br>
    <input type="text" name="recherche" value="">
    <input type="submit" class="button" value="Rechercher">
  </form>
<div class="stock">
  <h2>Catalogue</h2>
  <?php

  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=didier_motte;charset=utf8', 'root', 'user');
  }
  catch(Exception $e)
  {
          die('Erreur : '.$e->getMessage());
  }

  $result = $bdd->query("SELECT * FROM objects");

  while($donnees = $result->fetch()){
    ?>
    <li id="stock">
      <a href="">
        <img src="<?php echo $donnees['image'] ?>">
        <h4><?php echo $donnees['title'] ?></h4>
      </a>
    </li>
    <?php
  }

  ?>


</div>
</div>
