<!DOCTYPE html>
<html>

<head>
    <title>Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        .navbar-brand {
            margin-right: auto;
        }

        .navbar-brand img {
            max-height: 40px;
            width: auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="Photos/logo.jpeg" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-5">
                    <a class="nav-link" href="#">Acceuil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-5" data-toggle="dropdown">Formation</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Génie informatique</a></li>
                        <li><a class="dropdown-item" href="#">Informatique et Gestion</a></li>
                        <li><a class="dropdown-item" href="#">Génie industriel</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-5" data-toggle="dropdown" id="se-connecter">
                        Se Connecter
                    </a>
                    <div class="dropdown-menu dropdown-menu-right ">
                        <a class="dropdown-item" href="Etudiant.php" id="se-connecter">Espace Etudiant</a>
                        <a class="dropdown-item" href="Formateur.php" id="se-connecter">Espace Formateur</a>
                        <a class="dropdown-item" href="login_admin.php" id="se-connecter">Espace administration</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row barhid">
        <!--<div class="col-lg-3 col-md-4 col-sm-4">
            <div class="clignote">
                <a href="index.php?page=inscription">PRÉINSCRIPTION</a>
            </div>
        </div>-->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="marquee-rtl">
            <!-- le contenu défilant -->
                <div style="font-size: 1.5em; line-height: 2em; color : #0d2b55; font-weight: bold;">
                    <img src="logohaute.png" style="width:80px;">
                          
                        <a href="index.php?page=inscription">OUVERTURE DES INSCRIPTIONS À PARTIR DU 03/07/2023</a>
                          
                    <img src="logohaute.png" style="width:80px;">
                          
                        ECOLE RECONNUE PAR L’ETAT
                          
                    <img src="logohaute.png" style="width:80px;">
                          
                        DIPLÔMES RECONNUS PAR L’ETAT
                    <img src="logohaute.png" style="width:80px;">
            
                    مدرسة معترف بها من طرف الدولة
                    <img src="logohaute.png" style="width:80px;">
                    
                        <a href="index.php?page=inscription">OUVERTURE DES INSCRIPTIONS À PARTIR DU 03/07/2023</a>
                          
                    <img src="logohaute.png" style="width:80px;">
                      
                        ECOLE RECONNUE PAR L’ETAT
                          
                    <img src="logohaute.png" style="width:80px;">
                      
                        DIPLÔMES RECONNUS PAR L’ETAT
                          
                    <img src="logohaute.png" style="width:80px;">
                      
                    مدرسة معترف بها من طرف الدولة
                          
                    <img src="logohaute.png" style="width:80px;">
                
                      
                        <a href="index.php?page=inscription">OUVERTURE DES INSCRIPTIONS À PARTIR DU 03/07/2023</a>
                          
                    <img src="logohaute.png" style="width:80px;">
                      
                        ECOLE RECONNUE PAR L’ETAT
                          
                    <img src="logohaute.png" style="width:80px;">
                      
                        DIPLÔMES RECONNUS PAR L’ETAT
                          
                    <img src="logohaute.png" style="width:80px;">
                      
                    مدرسة معترف بها من طرف الدولة
                          
                    <img src="logohaute.png" style="width:80px;">
                
                      
                        <a href="index.php?page=inscription">OUVERTURE DES INSCRIPTIONS À PARTIR DU 03/07/2023</a>
                          
                    <img src="logohaute.png" style="width:80px;">
                      
                        ECOLE RECONNUE PAR L’ETAT
                          
                    <img src="logohaute.png" style="width:80px;">
                      
                        DIPLÔMES RECONNUS PAR L’ETAT
                          
                    <img src="logohaute.png" style="width:80px;">
                      
                    مدرسة معترف بها من طرف الدولة
                          
                    <img src="logohaute.png" style="width:80px;">
                </div>
            </div>
        </div>
    </div>
</body>

</html>