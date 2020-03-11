<!doctype html>
<html lang="fr">

<head>
    <?php include("../assets/head.php")?>
</head>
<body>
    <div class="Main"> 
    <!--Barre de menu en haut de l'écran-->
   <?php include("../assets/navbarre.php")?>
    <!--Page d'accueil-->
      <div class="Accueil" id="Accueil">    
        <img id="Ordinateur" src="../image/Ecran.png" alt="Ordinateur">
        <p>
          <strong>Voici mon Portfolio !</strong>
        </p>
    <!--Bouton en savoir plus et me contacter de la page d'accueil-->
        <div class="Apropos_Contacter">
          <a href="#Contact">
            <button class="Ensavoirplus" type="button">
            A propos
          </button></a>
          <a class="Mecontacter" href="mailto:killianhers@gmail.com">
          <button class="Mecontacter" type="button">
            Me contacter
          </button></a>
        </div>
        <div class="ClavierSouris" >
          <img id="Clavier" src="../image/Clavier1.png" alt="Clavier">
          <img id="Souris" src="../image/Souris.png" alt="Souris">
        </div>
      </div>
      
    <!--Premier carousel pour mes experiences-professionnelles-->
      <?php include("../assets/carousel1.php")?>
        <!--Compétences-->
        <div class="Competences" id="Competences" >
          <div class="bloc_HTML_CSS">
          <div class="bloc_icon_HTML_CSS">

            <div class="HTML">
                <P><i class="fab fa-html5"></i> </p>
                <p> HTML 5</p>
            </div>
    
            <div class="CSS">
              <p> <i class="fab fa-css3-alt"></i></p>
              <p>CSS 3</p>
            </div>      
          </div>
        </div>
      </div>
    
    <!-- Seconde partie Skill-->

        <div class="bloc_JS_PHP"> 
    
          <div class="bloc_icon_JS_PHP">
            <div class="JS">
              <p> <i class="fab fa-java"></i></p>
              <p>JAVASCRIPT</p>
            </div>
        
            <div class="PHP">
              <p><i class="fab fa-php"></i></p>
              <p>PHP</p>
            </div>
          </div>
        </div>
        
        <iframe class="video" src="https://www.youtube.com/embed/rwn5QWsk1zo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
      <!--Deuxième carousel pour mes formations-->
      <?php include("../assets/carousel2.php")?>


    <div class="container-contact100" id="Contact">
      <div class="Recommandations">
        <div class="vide"></div>


        <div class="Contactez-moi">
          <p>
          Hersant Killian
          </p>
          <p>
            Numero de téléphone
          </p>
          <p>
            07.62.05.78.01
          </p>
          <p>
            Adresse mail
          </p>
          <p>
            Killianhers@gmail.com
          </p>
          <a href="../CV_HERSANT_KILLIAN.pdf" class="btn-rounded-white">Télécharger mon CV</a>

        </div>

      </div>
      
      <div class="main-formulaire">
        <h1>Send us a message</h1>
      <div class="Fname_Lname">
        <div class="form-group">
          <label type="text" id="disabledTextInput" class="form-control" placeholder="Tell us your name">Tell us your name</label>
        </div>
        <form>
          <div class="FName">
            <div class="First">
              <input  type="text" class="form-control" placeholder="First name">
            </div>
            <div class="Last">
              <input type="text" class="form-control" placeholder="Last name">
            </div>
          </div>
      </div>
      <div class="Mail">
        <div class="form-group">
          <label type="text" id="disabledTextInput" class="form-control" placeholder="Enter your mail">Enter your mail</label>
        </div>
              <input type="text" class="form-control" placeholder="Ex@gmail.com">
      </div>
      <div class="Telephone">
        <div class="form-group">
          <label type="text" id="disabledTextInput" class="form-control" placeholder="Enter your phone number">Enter your phone number</label>
        </div>
              <input type="text" class="form-control" placeholder="06.00.00.00.00">
      </div>
      <div class="Message">
        <div class="form-group">
          <label type="text" id="disabledTextInput" class="form-control" placeholder="Message">Message</label>
        </div>
              <input type="text" class="form-control" placeholder="Write us a message">
              <div class="form-group">
            <div class="form-check">
              <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
              <label class="form-check-label" for="invalidCheck3">
                Je reconnais avoir pris connaissance des <a href="#" data-toggle="modal" data-target="#staticBackdrop">Conditions Générales d'Utilisation</a> du site et je les accepte.
            </div>
            </div>
            
              <div class="modal-footer">
                <button id="btnContact" type="button" class="btn btn-blue">Send</button>
              </div>
              
          </form>
        
        </div>
      </div>
    </div>
  <?php include("../assets/footer.php")?>
  <?php include("../assets/script.php")?>
</body>
</html>