
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Ozon'eco : dpe, amiante, gaz, electricite, immobilier, etat parasitaire, merule, diagnostic energetique, vente, location, expertise, diagnostic pas cher, diagnostic plomb, diagnostic amiante,Etudes thermiques, etude thermique, eco pret, pret à taux zero, </title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<meta name="description" content="dpe, amiante, gaz, electricite, immobilier, etat parasitaire, merule, diagnostic energetique, vente, location, expertise, diagnostic pas cher, diagnostic plomb, diagnostic amiante,Etudes thermiques, etude thermique, eco pret, pret à taux zero " />
<meta name="author" content="opalebox, http://www.opalebox.net">


<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
<!-- Font Awesome -->
<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

<!-- Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.css" />

<!-- REVOLUTION BANNER CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="assets/rs-plugin/css/settings.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/dropdown.css" />
<link rel="stylesheet" href="assets/css/owl.carousel.css" />
<link rel="stylesheet" href="assets/css/global.css" />
<link rel="stylesheet" href="assets/css/style.css" />
<link rel="stylesheet" href="assets/css/responsive.css" />
<link href="assets/css/skin.less" rel="stylesheet/less">
</head>
<body ng-app="websiteApp">
  <?php include("header.php"); ?>



  <!--Section area starts Here -->
  <section id="section">
    <!--Section box starts Here -->
    <div class="section">
      <div class="container">

      <div class="contact-form">
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <div class="heading ">
                <h3>Nous contacter</h3>
              </div>
                <form  id="contactForm" method="post" action="contactForm.php" >
                    <span><h6>Vos coordonnées</h6></span>
                    <input id="name" class="contact-name" type="text" placeholder="Nom*" ng-model="formData.name" ng-class="{'error' : errorName}"/>
                    <input id="prenom" class="contact-prenom" type="text" placeholder="Prenom*" ng-model="formData.prenom" ng-class="{'error' : errorPrenom}"/>
                    <input id="phone" class="contact-phone" type="text" placeholder="Téléphone*" ng-model="formData.phone" ng-class="{'error' : errorPhone}"/>
                    <input id="email" class="contact-mail" type="text" placeholder="Email*" ng-model="formData.email" ng-class="{'error' : errorEmail}"/>
                    <span><h6>Votre demande</h6></span>
                    <select name="type_transaction">
                        <option value="Type_transaction">Choisisez l'option correspondant à votre situation*</option>
                        <option value="location">Vous louez</option>
                        <option value="vente">Vous vendez</option>
                    </select>
                    <select name="type">
                        <option value="Type">Type de bien*</option>
                        <option value="Appartement">Appartement</option>
                        <option value="Maison">Maison</option>
                    </select>
                    <input id="surface" class="surface" type="text" placeholder="Surface*" ng-model="formData.surface" ng-class="{'error' : errorSurface}"/>
                    <select name="permis">
                        <option value="Date">Date de permis de construire*</option>
                        <option value="avant le 01/01/1949">Avant le 01/01/1949</option>
                        <option value="entre 1949 et 1997">Entre le 01/01/1949 et le 01/07/1997</option>
                        <option value="apres le 01/071997">Après le 01/07/1997</option>
                    </select>
                    <input id="adresse" class="adresse" type="text" placeholder="Adresse du bien*" ng-model="formData.adresse" ng-class="{'error' : errorAdresse}"/>
                    <input id="ville" class="ville" type="text" placeholder="Ville*" ng-class="{'error' : errorVille}" ng-model="formData.ville"/>
                    <select name="gaz">
                        <option value="Installation">Installation de gaz ?*</option>
                        <option value="Non ou moins de 15 ans">Non ou moins de 15 ans</option>
                        <option value="Plus de 15 ans">Plus de 15 ans</option>
                    </select>
                    <select name="electricite">
                        <option value="Installation">Installation électrique*</option>
                        <option value="moins de 15 ans">Moins de 15 ans</option>
                        <option value="Plus de 15 ans">Plus de 15 ans</option>
                    </select>
                    <textarea placeholder="Votre message*" id="message" ng-model="formData.message" ng-class="{'error' : errorTextarea}"></textarea>
                    <button type="submit" class="comment-submit qoute-sub" ng-disabled="submitButtonDisabled">Envoyer</button>
                  </div>
                </form>
              </div>
            </div>








          </div>
        </div>


          <div class="contact-form2">
              <div class="row2">
                <div class="col-xs-12 col-sm-6.1">
                  <div class="heading ">
                    <h3>Nous contacter</h3>
                  </div>
                  <div class="contact-form-box " ng-controller="FormController">
                    <form ng-submit="submitForm()" name="contactForm" method="post" novalidate id="contact">
                      <div ng-class="{'successMessage' : successsubmission}" ng-bind="successsubmissionMessage" id="success"></div>
                      <div class="row">
                        <span>Vos coordonnées</span>
                        <input id="name" class="contact-name" type="text" placeholder="Nom*" ng-model="formData.name" ng-class="{'error' : errorName}"/>
                        <input id="prenom" class="contact-prenom" type="text" placeholder="Prenom*" ng-model="formData.prenom" ng-class="{'error' : errorPrenom}"/>
                        <input id="email" class="contact-mail" type="text" placeholder="Email*" ng-model="formData.email" ng-class="{'error' : errorEmail}"/>
                        <span>Votre demande</span>
                        <select name="type_transaction">
                            <option value="Type_transaction">Choisisez l'option correspondant à votre situation*</option>
                            <option value="location">Vous louez</option>
                            <option value="vente">Vous vendez</option>
                        </select>
                        <select name="type">
                            <option value="Type">Type de bien*</option>
                            <option value="Appartement">Appartement</option>
                            <option value="Maison">Maison</option>
                        </select>
                        <input id="surface" class="surface" type="text" placeholder="Surface*" ng-model="formData.surface" ng-class="{'error' : errorSurface}"/>
                        <select name="permis">
                            <option value="Date">Date de permis de construire*</option>
                            <option value="avant le 01/01/1949">Avant le 01/01/1949</option>
                            <option value="entre 1949 et 1997">Entre le 01/01/1949 et le 01/07/1997</option>
                            <option value="apres le 01/071997">Après le 01/07/1997</option>
                        </select>
                        <input id="adresse" class="adresse" type="text" placeholder="Adresse du bien*" ng-model="formData.adresse" ng-class="{'error' : errorAdresse}"/>
                        <input id="ville" class="ville" type="text" placeholder="Ville*" ng-class="{'error' : errorVille}" ng-model="formData.ville"/>
                        <select name="gaz">
                            <option value="Installation">Installation de gaz ?*</option>
                            <option value="Non ou moins de 15 ans">Non ou moins de 15 ans</option>
                            <option value="Plus de 15 ans">Plus de 15 ans</option>
                        </select>
                        <select name="electricite">
                            <option value="Installation">Installation électrique*</option>
                            <option value="moins de 15 ans">Moins de 15 ans</option>
                            <option value="Plus de 15 ans">Plus de 15 ans</option>
                        </select>
                        <textarea placeholder="Votre message*" id="message" ng-model="formData.message" ng-class="{'error' : errorTextarea}"></textarea>
                        <button type="submit" class="comment-submit qoute-sub" ng-disabled="submitButtonDisabled">Envoyer</button>
                      </div>
                      <div ng-class="{'submissionMessage' : submission}" ng-bind="submissionMessage" class="error-msg"></div>
                    </form>
                  </div>
                </div>

                <div class="zone-de-travail">
                  <h4>Nos horaires</h4>
                  <div class="widget hours">
                            <ul class="open-hours">
                              <li>
                                <div class="date-day grid2column-progression">Lundi</div>
                                <div class="hours-date grid2column-progression lastcolumn-progression">9:00 - 19:30</div>
                                <div class="clearfix"></div>
                              </li>
                              <li>
                                <div class="date-day grid2column-progression">Mardi</div>
                                <div class="hours-date grid2column-progression lastcolumn-progression">9:00 - 19:30</div>
                                <div class="clearfix"></div>
                              </li>
                              <li>
                                <div class="date-day grid2column-progression">Mercredi</div>
                                <div class="hours-date grid2column-progression lastcolumn-progression">9:00 - 19:30</div>
                                <div class="clearfix"></div>
                              </li>
                              <li>
                                <div class="date-day grid2column-progression">Jeudi</div>
                                <div class="hours-date grid2column-progression lastcolumn-progression">9:00 - 19:30</div>
                                <div class="clearfix"></div>
                              </li>
                              <li>
                                <div class="date-day grid2column-progression">Vendredi</div>
                                <div class="hours-date grid2column-progression lastcolumn-progression">9:00 - 19:30</div>
                                <div class="clearfix"></div>
                              </li>
                              <li>
                                <div class="date-day grid2column-progression">Samedi</div>
                                <div class="hours-date grid2column-progression lastcolumn-progression">9:00 - 15:30</div>
                                <div class="clearfix"></div>
                              </li>
                              <li>
                                <div class="date-day grid2column-progression">Dimanche</div>
                                <div class="hours-date grid2column-progression lastcolumn-progression">Fermé</div>
                                <div class="clearfix"></div>
                              </li>
                            </ul>
                          </div>
                </div>



            </div>
          </div>
    <!--Section box ends Here -->
  </section>
  <!--Section area ends Here -->
<div class="map-ozon2">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2536.3993095890914!2d2.6876301!3d50.52674270000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2c50f17617369%3A0x4880b7a2ac2cd516!2sozon&#39;eco!5e0!3m2!1sfr!2sfr!4v1443027882368" width="360" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

<div class="map-ozon3">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2536.3993095890914!2d2.6876301!3d50.52674270000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2c50f17617369%3A0x4880b7a2ac2cd516!2sozon&#39;eco!5e0!3m2!1sfr!2sfr!4v1443027882368" width="1024" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

  <div class="location parallax">
    <div class="fond">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="heading">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include("footer.php"); ?>

<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/less.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.js"></script>
<script type="text/javascript" src="assets/js/jquery.selectbox-0.2.min.js"></script>
<!--Parrallax -->
<script type="text/javascript" src="assets/js/parallax.js"></script>
<!-- jQuery REVOLUTION Slider  -->
<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="assets/js/revolution.js"></script>
<script src="assets/js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/site.js"></script>
</body>
