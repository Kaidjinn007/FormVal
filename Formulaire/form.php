    <?php 
        $theme= 'lumen'; //Boootswatch theme name
        $phone = '00-00-00-00-00'; //Phone number format
        if(preg_match("/^[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}$/", $phone)) { //Constraints 
         // $phone is valid
        }
    ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Question de satisfaction</title>
      <link rel="stylesheet" href="https://bootswatch.com/5/<?php echo $theme ?>/bootstrap.css"> 
      <link rel="stylesheet" href="https://bootswatch.com/_vendor/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://bootswatch.com/_vendor/prismjs/themes/prism-okaidia.css">
      <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css">
      <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23019901-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-23019901-1');
        </script>
        <script id="_carbonads_projs" type="text/javascript" src="https://srv.carbonads.net/ads/CKYIE23N.json?segment=placement:bootswatchcom&amp;callback=_carbonads_go"></script>
  </head>
<body>
      <?php //Form Method and field checks
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["Lastname"])) {
          $LastnameErr = "Le nom est requis";
        } else {
          $Lastname = test_input($_POST["Lastname"]);
        }
      
        if (empty($_POST["Firstname"])) {
          $FirstnameErr = "Le prénom est requis";
        } else {
          $email = test_input($_POST["Firstname"]);
        }
      ?>

    <div class="container">
            <form method="POST" action=""> <!-- Form starts here with post method -->
              <fieldset>
                <legend>Questionnaire Satisfaction Client Amazin</legend>
                <div class="form-group row">
                  <label for="Lastname" class="col-sm-2 col-form-label">Nom</label>
                  <div class="col-sm-10">
                    <input type="text" readonly="" name="Lastname" class="form-control-plaintext" id="Lastname" value="Entrez votre nom">
                  </div>

                  <div class="form-group row">
                  <label for="Firstname" class="col-sm-2 col-form-label">Prénom</label>
                  <div class="col-sm-10">
                    <input type="text" readonly="" name="Firstname" class="form-control-plaintext" id="Firstname" value="Prénom">
                  </div>

                  <div class="form-group row">
                  <label for="Phone" class="col-sm-2 col-form-label">Téléphone</label>
                  <div class="col-sm-10">
                    <input type="text" readonly="" name="Phone" class="form-control-plaintext" id="Phone" value="0123456789">
                  </div>

                  <div class="form-group row">
                  <label for="Date" class="col-sm-2 col-form-label">Date de l'achat</label> <!-- To improve -->
                  <div class="col-sm-10">
                    <input type="date" readonly="" name="Date" class="form-control-plaintext" id="Date" value="10/04/2021">
                  </div>
                </div>

                <!-- Quesiton 1 -->
                <fieldset class="form-group">
                  <legend class="mt-4">L'agent a-t-il été agréable ?</legend>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                      Oui  
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadiosQ12" value="option2">
                      Non
                    </label>
                  </div>
                  <div class="form-check disabled">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadiosQ13" value="option3">
                      Sans Avis
                    </label>
                  </div>
                </fieldset>

                <!-- Quesiton 2 -->
                <fieldset class="form-group">
                  <legend class="mt-4">L'agent a-t-il compris votre problème ?</legend>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="question1" id="q11" value="question1" checked="">
                      Oui
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="question1" id="question12" value="option2">
                      Non
                    </label>
                  </div>
                  <div class="form-check disabled">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="question1" id="question13" value="option3">
                      Sans avis
                    </label>
                  </div>
                </fieldset>

                <!-- Quesiton 3 -->
                <fieldset class="form-group">
                  <legend class="mt-4">L'agent a-t-il résolu votre problème ?</legend>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="question2" id="question21" value="option1" checked="">
                      Oui
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="question2" id="question22" value="option2">
                      Non
                    </label>
                  </div>
                  <div class="form-check disabled">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="question2" id="question23" value="option3">
                      Sans avis
                    </label>
                  </div>
                </fieldset>
                  <!-- More -->
                <div class="form-group">
                  <label for="Plus" class="form-label mt-4">Dites-nous en plus</label>
                  <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
                  <?php
                    // var_dump($array [0]);
                    //echo $array [0]; 
                    //die
                     ?>
                <!-- Recall -->
                <fieldset class="form-group">
                  <legend class="mt-4">Acceptez-vous d'être rappelé ?</legend>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="question3" id="question31" value="option1" checked="">
                      Oui
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="question3" id="question32" value="option2">
                      Non
                    </label>
                  </div>
                </fieldset>
                <button type="submit" class="btn btn-primary">Submit</button>
              </fieldset>
            </form>
    </div>
    <script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://bootswatch.com/_vendor/prismjs/prism.js" data-manual=""></script>
    <script src="https://bootswatch.com/_assets/js/custom.js"></script>
</body>
</html>