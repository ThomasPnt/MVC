<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/stock.css">
  <title>Document</title>
</head>
<body>
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
        <div class="Acajou">Acajou</div>
        <div class="Balance">Balance</div>
        <div class="Bois">Bois</div>
        <div class="Canape">Canapé</div>
      </div>
    </div>
  </div>
</body>
</html
