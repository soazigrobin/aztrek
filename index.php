<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$list_pays = getAllEntities("pays");

get_header("Accueil");
?>


      <!-- =================================================

SECTION DESTINATIONS

================================================ -->


      <section class="content--1 ">
        <div class="container destinations">

          <div class="title--destinations">
            <a href="#">Thèmes</a>
            <a href="#">Destinations</a>

          </div>

          <div class="container ">
              
           <?php foreach ($list_pays as $pays) : ?>
            <article class="encart--1 destinations ">
              <div class="destinations--title ">
                <img class="destinations--img " src="uploads/<?php echo $pays["image"]; ?>" alt="<?php echo $pays["nom"]; ?>" />
                
                  <a href="pays.php?id=<?php echo $pays["id"]; ?>"><h3><?php echo $pays["nom"]; ?></h3></a>
                
              </div>
            </article>
              <?php endforeach; ?>

 
            <div class=" encart--6 destinations--texte">
              <p class="p1">Besoin d’un conseil?</p>
              <p class="p2">Demandez à la communauté !</p>
              <a href="# " class="call-to-action oui">OUI !</a>

            </div>
          </div>
        </div>
      </section>


      <!-- =================================================

SECTION AZTREK

================================================ -->

      <section class="content--2 ">

        <div class="container aztrek">

          <article>
            <div class="photo-aztrek">
              <img src="images/aztrek.jpg" alt="photo">
              <h3>FAIRE DE VOTRE VOYAGE UNE EXPÉRIENCE INOUBLIABLE</h3>
            </div>
            <div class="texte-aztrek">
              <p class="p1">AZTREK est à votre écoute pour élaborer des voyages personnalisés...</p>
              <p class="p2"> qui répondent véritablement à vos attentes. Que vous souhaitiez voyager seul, en couple, en famille, entre
                amis ou en groupe, notre équipe de spécialistes est là pour vous aider à créer votre voyage et vous proposer
                des prestations de qualité adaptées à vos envies. Globe-trotters, passionnés d’histoire, amoureux de la nature,
                ayant une connaissance approfondie des destinations qui vous sont proposées, nos conseillers peuvent répondre
                aux demandes les plus diverses.</p>
              <a href="# " class="call-to-action infos">EN SAVOIR +</a>
              <img class="logo-aztrek-brun" src="images/logo_brun.png " alt="Logo aztrek " />
            </div>
          </article>

        </div>
      </section>

      <!-- =================================================

SECTION SUGGESTIONS

================================================ -->

      <section class="content--3 ">

        <div class="container suggestions">
          <h2>NOS SUGGESTIONS</h2>

          <div class="c3 ">
            <article class="encart--1  ">

              <img class="suggestions--img " src="images/suggestions-costa-rica.jpg " alt="Photo costa rica " />
              <div class="suggestions--title ">
                <h3>Une chasse aux trésors grandeurs nature</h3>
                <a href="# " class="call-to-action pays">COSTA RICA</a>
              </div>
              <div class="content">
                <p>Ce paradis tropical où la nature règne en maître abrite un relief montagneux, une jungle luxuriante et des
                  volcans encore actifs
                  <br>
                  <span>DÈS 1260€</span>
                </p>
              </div>
            </article>

            <article class="encart--2  ">

              <img class="suggestions--img " src="images/suggestions-mexique.jpg " alt="Photo mexique " />
              <div class="suggestions--title ">
                <h3>Indiana Jones au mexique !</h3>
                <a href="# " class="call-to-action pays pays-1">MEXIQUE</a>
              </div>
              <div class="content">
                <p>Un itinéraire idéal pour satisfaire la curiosité culturelle des grands et l’envie d’aventuree
                  <br>
                  <span>DÈS 1430€</span>
                </p>
              </div>

            </article>

            <article class="encart--3  ">

              <img class="suggestions--img " src="images/suggestions-salvador.jpg " alt="Photo salvador " />
              <div class="suggestions--title ">
                <h3>Sur les routes précolombiennes</h3>
                <a href="# " class="call-to-action pays">SALVADOR</a>
              </div>
              <div class="content">
                <p>Arrivée à Suchitoto, berceau de l’histoire et de la culture du Salvador où il semblerait que le temps se
                  soit arrêtée
                  <br>
                  <span>DÈS 1699€</span>
                </p>
              </div>
            </article>

            <article class="encart--4 ">

              <img class="suggestions--img " src="images/suggestions-guatemala.jpg " alt="Photo honduras " />
              <div class="suggestions--title ">
                <h3>Irrésistible !</h3>
                <a href="# " class="call-to-action pays pays-1">HONDURAS</a>
              </div>
              <div class="content">
                <p>les traditions encore ancrées nous font plonger des siècles en arrière, les pyramides mayas émergeant de
                  la brumee
                  <br>
                  <span>DÈS 1320€</span>
                </p>
              </div>
            </article>
          </div>
        </div>
      </section>




      <!-- =================================================

SECTION COMMUNAUTÉ

================================================ -->

      <section class="content--5 ">

        <div class="container communaute">
          <img class="logo-aztrek-blanc" src="images/logo_blanc.png " alt="Logo logo_blanc " />
          <h3>REJOIGNEZ
            <span>LA COMMUNAUTÉ </span>ATREK ICI</h3>
          <p class="p1">Vous n’avez pas besoin de réserver un voyage pour rejoindre notre communauté !</p>
          <p class="p2">Commencez à vous connecter avec nos randonneurs :</p>
          <p class="p2 texte-communaute">
            <i class="fas fa-check"></i>Créez votre profil</p>
          <p class="p2 texte-communaute">
            <i class="fas fa-check"></i>Rejoignez les discussions dans le Forum</p>
          <p class="p2 texte-communaute">
            <i class="fas fa-check"></i>Rencontrez d’autres randonneurs</p>

          <a href="# " class="call-to-action inscription">Je m'inscris !</a>

        </div>
      </section>


      <!-- =================================================

SECTION DERNIÈRES ACTUS

================================================ -->


      <section class="content--6 ">


        <h2>NOS DERNIÈRES ACTUS</h2>
        <div class="container--actus ">
          <img class="actus picto appareil" src="images/appareil-photo.png " alt="Picto appareil photo " />
          <img class="actus picto heart" src="images/heart.png " alt="Picto coup de coeur " />
          <img class="actus picto " src="images/reporter.png" alt="Picto reporter " />
          <!-- <img class="actus picto " src="images/ligne_pointille.png " alt="Picto ligne pointillé " /> -->

        </div>

      </section>



      <!-- =================================================

SECTION NEWSLETTER

================================================ -->

      <section class="content--7 ">

        <div class="container newsletter">

          <p class="newsletter--texte">Ne manquez plus aucune actualité Inscrivez-vous à la newsletter AZTREK !</p>

          <form class="newsletter--search-form" action="#" method="get">
            <input type="text" name="keywords" value="" placeholder="Votre adresse mail">
            <button type="submit" name="submit-btn">Je m'abonne!</button>
          </form>
        </div>
      </section>

      <!-- =================================================

SECTION GARANTIES

================================================ -->

      <section class="content--8 ">
        <div class="bordure bordure1"></div>

        <h3 class="garanties--title">5 BONNES RAISONS DE CHOISIR AZTREK</h3>
        <div class="container garanties">


          <article class="encart garanties">
            <img class="picto" src="images/paiement_secure.png" alt="Picto paiement sécurisé" />
            <h4>Paiement sécurisé</h4>
            <p>Toutes nos transactions sont assurées et sécurisées par une technologie reconnue pour sa sécurité</p>
          </article>


          <article class="encart garanties">
            <img class="picto" src="images/price.png" alt="Picto price" />
            <h4>Prix</h4>
            <p>Les prix de nos voyages sont étudiés au plus juste, nous vendons en direct et pratiquons des niveaux de marge
              modérés
            </p>
          </article>

          <article class="encart garanties">
            <img class="picto" src="images/assurance.png " alt="Picto assurance " />
            <h4>Garantie Sécurité</h4>
            <p>Vous partez en toute tranquillité en bénéficiant de la garantie financière APST des Tour-Opérateurs français</p>
          </article>

          <article class="encart garanties">
            <img class="picto" src="images/24.png " alt="Picto 24 24" />
            <h4>Assistance 24H/24</h4>
            <p>Pendant votre séjour, vous bénéficiez d’une assistance 24h/24 en France, comme à destination pour voyager</p>
          </article>

          <article class="encart garanties">
            <img class="picto" src="images/service_client.png" alt="Picto service client " />
            <h4>Service client</h4>
            <p>Nos équipes sont en permanence à vos côtés pour vous accompagner dans la réalisation de votre voyage </p>
          </article>


        </div>
        <div class="bordure bordure2"></div>

      </section>
    </main>


      <!-- =================================================

FOOTER

================================================ -->
<?php get_footer(); ?>

     


      <script src="js/jquery-3.3.1.min.js "></script>
      <script src="js/jquery.sidr.min.js "></script>
      <script src="js/owl.carousel.min.js "></script>
      <script src="js/scripts.js "></script>

  </body>

</html>