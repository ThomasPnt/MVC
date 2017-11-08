<?php include('header.php'); ?>
    <div id="global">
      <h1>Contact</h1>
      <div class="textehoraire">
        <h2>Le Magasin</h2>
        <h3>Le magasin est ouvert le samedi matin de 10h00 à 12h30 ou sur rendez-vous.</h3>
        <div class="deuxboutons">

            <div class="coordonées">
              <p>+32 495 20.59.34 <br>Rue Saint Georges , 35 ,<br>1400 Nivelles ,<br>Belgique.</p>
              <p>Retrouvez nos mises à jour en vous <button type="button" name="bouton" src="">abonnez-vous à notre page Facebook</button></p>  <!--Pensez à faire un css sur le bouton à faire en noir avec angles arrondis et lettres épaisses et blanches et en minuscules ! et à connecter le lien url-->
            </div>

            <div class="carteglougole">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2532.5890241181537!2d4.324949051416682!3d50.597591579395356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c232d3694f6c59%3A0xe7333aff0bd54fec!2sRue+Saint-Georges+35%2C+1400+Nivelles!5e0!3m2!1sfr!2sbe!4v1509981896259" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="bas de page">
              Lieu de départ :
            <!-- A mettre sur la même ligne que le la fenêtre suivante-->

            <!-- fenêtre de remplissage-->
            <form class="rechercheStock" action="stock.php" method="get">
              <label>Fouiller le stock</label>
              <input type="text" name="recherche" value="">

              <!-- A mettre sur la même ligne que le la fenêtre précédente-->
              <input type="submit" class="button" value="Itinéraire">
            </form>




          </div>
        </div>
      </div>
    </div>
    <?php include('footer.php'); ?>
