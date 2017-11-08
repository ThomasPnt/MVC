<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:900" rel="stylesheet">
    <link rel="stylesheet" href="./css/contact.css">
    <title>testcontact</title>
  </head>
  <body>



    <div id="global">
      <h1>Contact</h1>
      <div class="textehoraire">
        <h2 class="texthor">Le Magasin</h2>
        <h3>Le magasin est ouvert le samedi matin de 10h00 à 12h30 ou sur rendez-vous.</h3>
          <h4>Didier Motte</h4>
            <div class="boutons">
              <a href="">dmotte@skynet.be</a>
            </div>

            <div class="coordonées">
              <p>+32 495 20.59.34 <br>Rue Saint Georges , 35 ,<br>1400 Nivelles ,<br>Belgique.</p>
              <p>Retrouvez nos mises à jour en vous  <a href="https://www.facebook.com/antiquites.decoration">abonnant à notre page Facebook</a> </p>  <!--Pensez à faire un css sur le bouton à faire en noir avec angles arrondis et lettres épaisses et blanches et en minuscules ! et à connecter le lien url-->
            </div>

        <!-- fenêtre de remplissage-->
        <form class="rechercheStock" action="stock.php" method="get">
          <label>Fouiller le stock</label>
          <input type="text" name="recherche" value="">

            <div class="basdepage">
              <h3>Lieu de départ :
              <!-- A mettre sur la même ligne que le la fenêtre suivante-->

              <!-- fenêtre de remplissage
              <form class="rechercheStock" action="stock.php" method="get">-->

              <input type="text" name="recherche" value="">

              <!-- A mettre sur la même ligne que le la fenêtre précédente-->
              <input type="submit" class="button" value="Itinéraire">
            </form></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
