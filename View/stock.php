<div class="PageStock">
  <h1>Objets</h1>
    <form class="rechercheStock" action="stock.php" method="get">
      <label>Fouiller le stock</label><br>
      <input type="text" name="recherche" value="">
      <input type="submit" class="button" value="Rechercher">
    </form>
  <div class="stock">
    <h2>Catalogue</h2>
    <div class="Photos">
      <?php
        try {
          $DB = new PDO('mysql:host=localhost;dbname=stocks;charset=utf8','root','user');
          $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(Exception $e) {
          die('Error : '.$e->getMessage());
        }

        $sql = $DB->query('SELECT * FROM img');
        while($img = $sql->fetch()) {
          echo "<div class='stocks'><p>".$img['name']."</p><img class='grow' src='".$img['url']."'/></div>";
        }
      ?>
    </div>
  </div>
</div>
