<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Bootstrap</title>
    <?php
    require("Bootstrap.php")
    ?>
    <style>
        #map {
            height: 300px;
        }
        .social-icons {
            font-size: 24px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
  <?php
  require("menu.php");
  ?>
  <form action="contact_valide.php" method="post">
    <div class="container" style="margin-top: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom :</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail :</label>
                        <input type="email" class="form-control" id="email"  name="email" placeholder="Votre adresse e-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Portable :</label>
                        <input type="tel" class="form-control" id="Portable"  name="Portable" placeholder="Votre Portable" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message :</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
                </form>
            </div>
            <div class="col-md-6">
                <img src="Photos/GC.png" alt="Localisation" class="img-fluid">
            </div>
        </div>
        <span style="color:red; font-weight: bold;font-size: 1.5em;" class="text-center">Notre Localisation</span>
        <div class="row justify-content-center mt-5" >
            <div class="col-md-6 text-center" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3281.861743034708!2d-1.8966667!3d34.6581944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzTCsDM5JzI5LjUiTiAxwrA1Myc0OC4wIlc!5e0!3m2!1sfr!2sma!4v1683478125977!5m2!1sfr!2sma" width="300" height="300" 
               loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="20"></iframe>

            </div>
        </div>

          <div class="container" >
    <div class="contact-section">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-info">
            <h3>Horaires de l'école</h3>
            <p>Lundi - Vendredi : 9h - 17h</p>
            <p>Samedi - Dimanche : Fermé</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-info">
            <h3>Suivez-nous sur les réseaux sociaux</h3>
            <p>
              <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
            </p>
            <p>
              <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
            </p>
            <p>
              <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-info">
            <h3>Contactez-nous</h3>
            <p>Adresse : 123 Rue du Contact, Ville</p>
            <p>Téléphone : +123 456 789</p>
            <p>Email : info@example.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        </div>
      </div>
    </div>
  </div>
  </form>
  <?php
require("copyright.php");
?>
</body>
</html>