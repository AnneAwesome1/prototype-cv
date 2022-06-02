<?php

require 'connexion.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Quicksand&family=Syncopate:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
  <script src="script.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <title>Document</title>
</head>
<video playsinline autoplay muted loop poster="Storm1.mp4" id="bgvid">

  <source src="Storm1.mp4" type="video/mp4">

</video>

<body>

  <nav>
    <div class="logo">
      <img src="https://flashblack.fr/wp-content/uploads/2022/02/cropped-FLSHBLCK-DISSOCIER-2.png" alt="FLSHBLCK">

    </div>

    <div class="menu" id="menu">
      <!----------------------------------------------------------------------------->
      <?php
      $blockMenu = [

        'formations' => ['#FRMTNS',  'FORMATION'],
        'curriculum' => ['#CV',  'CV'],
        'contact' => ['#CNTCT',  'CONTACT'],
      ]
      ?>

      <!-- ---------------------------------------------------------------------------------- -->
      <?php foreach ($blockMenu as $cle => $valeur) : ?>

        <a href="<?php echo $valeur[0] ?>" class="" id="">

          <button class="men" id="" type="button">

            <h3 id="h3nav">

              <?php echo $valeur[1] ?>

            </h3>

          </button></a>

      <?php endforeach; ?>

  </nav>

  <div class="CORP">
    <header>
      <section class="ACCUEIL">
        <h1 id="bonj">HI!</h1>
        <p>Je suis Dévellopeur Web et Mobile.</p>
        <!-- <--?J'ai découvert le langage informatique lors d'une formation en Infographie et
                         c'est dans l'optique de faire des sites web Dynamique et adapté que je me suis orientée vers la programmation. -->
        </p>
        <!-- BTN FULLSTCK ////////////////////////////////////////////////////////////////////// -->
        <!-- <div class="tooltip"><span class="top">Click On</span></div> -->
        <div class="tooltip">
          <button id="FLLSTCK" class="fllstck" type="button" id="">
            <h1 id="fll">FULLSTACK</h1>
          </button>
          <span class="top">Click On</span>

        </div>

        <!-- <p id="p_ov" style="position:absolute;">click on</p> -->
        <!-- COMPETENCES /////////////////////////////////////////////////////////////////////////////////                    -->
        <section id="CMPTNCS" style="display:none;">
          <a href="#competences" class="section" id="competence"> <button class="bttn" type="button">
              <h3 id="btn">COMPETENCES</h3>
            </button></a>

          <!-- SQL COMPETENCE ///////////////////////////////////////////////////////////////////////////////////////                        ------------------------------------------------------------------------------------- -->
          <?php

          $query = "SELECT * FROM compétences";
          $req = $connexion->prepare($query);
          $req->execute();
          $blockCompetences = $req->fetchAll(PDO::FETCH_ASSOC);



          ?>
          <!----------------------------------------------------------------------------------------------->
          <!-- COMPETENCES //////////////////////////////////////////////////////////// -->
          <div class="cmptncs" id="htmlcss">

            <div class="cmpt" id="html">
              <h3 id="cpt">
                <?php echo $blockCompetences[0]['name']; ?>
              </h3>
              <img class="imgcpt" src="<?php echo $blockCompetences[0]['img_url']; ?>" alt="">
              <p class="pcmpt"><?php echo $blockCompetences[0]['def']; ?></p>
            </div>

            <div class="cmpt" id="css">
              <h3 id="cpt">
                <?php echo $blockCompetences[1]['name']; ?>
              </h3>
              <img class="imgcpt" src="<?php echo $blockCompetences[1]['img_url']; ?>" alt="">
              <p class="pcmpt"><?php echo $blockCompetences[1]['def']; ?></p>
            </div>

            <div class="cmpt" id="boot">
              <h3 id="cpt">
                <?php echo $blockCompetences[2]['name']; ?>
              </h3>
              <img class="imgcpt" src="<?php echo $blockCompetences[2]['img_url']; ?>" alt="">
              <p class="pcmpt"><?php echo $blockCompetences[2]['def']; ?></p>
            </div>
          </div>

          <!-- //////////////////////////////////////////////////////////////////////////// -->
          <div class="cmptncs" id="jqueryjvscrpt">

            <div class="cmpt" id="jquery">
              <h3 id="cpt">
                <?php echo $blockCompetences[3]['name']; ?>
              </h3>
              <img class="imgcpt" src="<?php echo $blockCompetences[3]['img_url']; ?>" alt="">
              <p class="pcmpt"><?php echo $blockCompetences[3]['def']; ?></p>
            </div>

            <div class="cmpt" id="jvscrpt">
              <h3 id="cpt">
                <?php echo $blockCompetences[4]['name']; ?>
              </h3>
              <img class="imgcpt" src="<?php echo $blockCompetences[4]['img_url']; ?>" alt="">
              <p class="pcmpt"><?php echo $blockCompetences[4]['def']; ?></p>
            </div>

            <div class="cmpt" id="sql">
              <h3 id="cpt">
                <?php echo $blockCompetences[5]['name']; ?>
              </h3>
              <img class="imgcpt" src="<?php echo $blockCompetences[5]['img_url']; ?>" alt="">
              <p class="pcmpt"><?php echo $blockCompetences[5]['def']; ?></p>
            </div>
          </div>

          <!-- //////////////////////////////////////////////////////////////////////////////////// -->
          <div class="cmptncs" id="wordpressphp">

            <div class="cmpt" id="php">
              <h3 id="cpt">
                <?php echo $blockCompetences[6]['name']; ?>
              </h3>
              <img class="imgcpt" src="<?php echo $blockCompetences[6]['img_url']; ?>" alt="">
              <p class="pcmpt"><?php echo $blockCompetences[6]['def']; ?></p>
            </div>

            <div class="cmpt" id="symphony">
              <h3 id="cpt">
                <?php echo $blockCompetences[7]['name']; ?>
              </h3>
              <img class="imgcpt" src="<?php echo $blockCompetences[7]['img_url']; ?>" alt="">
              <p class="pcmpt"><?php echo $blockCompetences[7]['def']; ?></p>
            </div>
            <div class="cmpt" id="wordpress">
              <h3 id="cpt">
                <?php echo $blockCompetences[8]['name']; ?>
              </h3>
              <img class="imgcpt" src="<?php echo $blockCompetences[8]['img_url']; ?>" alt="">
              <p class="pcmpt"><?php echo $blockCompetences[8]['def']; ?></p>
            </div>
          </div>

        </section>
        <!-- BTN INFO ///////////////////////////////////////////////////////////////////////////////////////// -->
        <div class="tooltip">
          <button class="bttn" type="button" id="nfgrphst">
            <h3 id="btn">INFOGRAPHISTE</h3>
          </button>
          <span class="top">Click On</span>
        </div>
      </section>

    </header>

    <!-- 
A PROPOS /////////////////////////////////////////////////////////////////////// -->
    <section id="APRPS">
      <a href="#apropos" class="section" id="apropos"><button class="bttn" type="button">
          <h3 id="btn">A PROPOS</h3>
        </button></a>
      <p id="prpss">
        En reconversion depuis le début de la pandémie, j'ai commencé la programmation par Hasard. <br>
        C'est l'élément indispensable pour créer des sites dynamiques, responsives. <br>
        La création d'applications n'est pas mon objectif, je m'oriente d'avantage sur la mise en page de site et la récupération de données.
      </p>

    </section>

    <!-- FORMATIONS /////////////////////////////////////////////////////////        ------------------------------------------------------------------------------------------- -->
    <section id="FRMTNS">
      <a href="#formations" class="section" id="formation"> <button class="bttn" type="button">
          <h3 id="btn">FORMATIONS</h3>
        </button></a>
      <div class="frmtn" id="frmtns">

        <div class="formations_os">
          <div class="tooltip"><span class="top2">Click On</span>
            <button id="OSE" type="button">
              <h3 id="et_un">2021-2022</h3>
              <h3 id="OS">DEVELOPPEUR WEB <br> ET MOBILE</h3>
              <br>
              <div class="Frmlg">
                <img class="frmlg" src="LOGO_OSENGO_OK.png" alt="">
              </div>
              <a class="for" href="https://osengo.fr/">https://osengo.fr</a>
            </button>
          </div>
          <br><br>
          <p id="p_form_os">Titre professionnel enregistré au RNCP niveau 5 <br>(équivalent BTS)<br>
            <br><strong>Description:</strong>
            <br> - Les langages de base HTML5 et CCS
            <br> - Maquetter une application informatique
            <br> - UI/UX Desig
            <br> - Fondamentaux conception (modélisation, UML, méthode AGILE, exigences de sécurité …)
            <br> - Framework HTML/CSS/JS: Bootstrap, pouvoir réaliser le Frontend d'un site WEB
            responsive</li>
            <br> - JavaScript / AJAX, être capable de réaliser une application en JS natif- PHP,
            WordPress,
            Prestashop,
            Linux, Git, savoir utiliser un logiciel de gestion de contenu, pouvoir mettre une
            réalisation en
            production
            dans un environnement Linux : Backend</li>
            <br> - Base de données, conception et mise en place pour découvrir les éléments d'une base
            de données
            MySQL,
            concevoir et créer une base de données, manipuler des données avec SQL et SQL procédural
            <br> - Les langages structurés pour API
            <br> - PHP Approfondissement
            <br>- Maîtriser les Framework et bibliothèque JavaScript
            <br> - Développement d'applications mobiles </li>
            <br>

          </p>

        </div>
        <div class="formations_do">
          <div class="tooltip"><span class="top2">Click On</span>
            <button id="DOR">
              <h3 id="vingt">2020</h3>
              <h3 id="DO">INFOGRAPHISTE<br>METTEUR EN PAGE</h3>
              <br>
              <div class="Frmlg">
                <img class="frmlg" src="LOGO_DORANCO.png" alt="">
              </div>
              <a class="for" href="https://www.doranco.fr/">https://www.doranco.fr</a>
            </button>
          </div>
          <br><br>
          <p id="p_form_do">Diplôme reconnu par l'État au niveau 4 <br>(équivalent Bac)<br>
            <br>
            Titre professionnel enregistré au RNCP (Répertoire National des Certifications
            Professionnelles par arrêté
            du 01/08/2018 publié au Journal Officiel le 15/08/2018 et délivré par le Ministère chargé de
            l’Emploi)
            <br><strong>Le métier</strong> :
            <br>Les infographistes metteurs en pages travaillent dans des entreprises de communication
            (presse écrite,
            agence de publicité, presse télévisée...), maisons d’édition ou autres entreprises
            industrielles.<br>
            Ils font la conception et la réalisation de maquettes, de produits graphiques et
            numériques, en utilisant
            les outils informatiques.
            Ils travaillent généralement sous la responsabilité d’un directeur artistique, concepteur,
            éditeur, chef de projet, webmaster.
            <br><strong>Objectifs</strong> :
            <br>Exécuter des mises en pages complexes et maîtriser les principaux logiciels de la
            chaîne graphique
            Réaliser un ensemble de documents destinés à l'édition
            Effectuer des choix typographiques et optimiser des images pour le web
            Intégrer et publier un site web

          </p>
        </div>




      </div>

    </section>
    <!-- CV ////////////////////////////////////////////////////////// -->
    <section id="CV">
      <div class="tooltip">
        <button id="cur" class="bttn" type="button"><a href="#CV" class="section">
            <h3 id="btn" class="curr">CURRICULUM VITAE</h3>
        </button></a>
        <span class="top">Click On</span>
      </div>
      <div id="curri">


        <img id="cv" class="curri" src="KEBEDJIS-BORDATO-ANNE.png " alt="">

        <button id="print" onclick="PrintImage();">
          <h3>Imprimer</h3>
        </button>
      </div>

    </section>
    <!-- CONTACT ///////////////////////////////////////////////////// -->
    <footer>
      <section id="CNTCT">
        <a href="#contact" class="section" id="contact"><button class="bttn" type="button">
            <h3 id="btn">GET IN TOUCH</h3>
          </button></a>
        <div id="contacts">


          <div id="cont">

            <p id="contact">

              <strong>Email :
                <br><br>
                <a id="acont" href="mailto:annekebedjis@gmail.com">annekebedjis@gmail.com</a>
              </strong>
              <br>

              <strong>Mobile : 06 41 53 30 51</strong></li>
              <br>

              <strong>
                Adresse : LE BARCARES 66420
              </strong>

            </p>

          </div>
        </div>
      </section>

      <div class="droite">
        <h3 id="dt">DATE</h3>
        <p id="date"></p>
      </div>
      <div class="gauche">

      </div>

    </footer>
  </div>



  <!-- ----------------------JQUERY----------------------------- -->
  <!-- BOUTONS FULLSTACK -> Competences -->
  <script>
    var button = document.getElementById('FLLSTCK')
    button.onclick = function() {
      var div = document.getElementById('CMPTNCS')
      if (div.style.display !== 'none') {
        div.style.display = 'none';
      } else {
        div.style.display = 'block';
      }
    }


    var button = document.getElementById('cur')
    button.onclick = function() {
      var div = document.getElementById('curri')
      if (div.style.display !== 'none') {
        div.style.display = 'none';
      } else {
        div.style.display = 'block';
      }
    }


    var button = document.getElementById('OSE')
    button.onclick = function() {
      var div = document.getElementById('p_form_os')
      if (div.style.display !== 'none') {
        div.style.display = 'none';
      } else {
        div.style.display = 'block';
      }
    }



    var button = document.getElementById('DOR')
    button.onclick = function() {
      var div = document.getElementById('p_form_do')
      if (div.style.display !== 'none') {
        div.style.display = 'none';
      } else {
        div.style.display = 'block';
      }
    }


    //////////////////////////////// IMPRIMER CV ////////////////////
    function PrintImage() {
      printWindow = window.open();
      printWindow.document.write("<div style='width:25%;'>");
      printWindow.document.write("<img id='cv' src='" + document.getElementById('cv').src + "'/>");
      printWindow.print();
    }

    /////////////////////////////// mouseover/////////////////

    // $(document).ready(function(){
    //   $("#FLLSTCK").mouseover(function(){
    //     $("#p_ov").show();
    //   });
    //   $("#FLLSTCK").mouseout(function(){
    //     $("#p_ov").hide();
    //   });
    // });
  </script>
</body>

</html>