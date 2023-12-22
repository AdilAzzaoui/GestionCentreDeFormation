<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top"  >
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
          <img src="Photos/logo.jpeg" alt="logo" style="width:50px;" class="mr-5">
        </a>
        
        <!-- Links -->
        <div class="ml-auto">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link mr-5" href="acceuil.php"  id="se-connecter" >ACCEUIL</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-5" data-toggle="dropdown"  id="se-connecter">
                  FORMATION
                </a>
                <div class="dropdown-menu dropdown-menu-right " >
                  <a class="dropdown-item"  href="#section2"  id="se-connecter">GÉNIE INFORMATIQUE</a>
                  <a class="dropdown-item" href="#section2"  id="se-connecter">INFORMATIQUE ET GESTION</a>
                  <a class="dropdown-item" href="#section2"   id="se-connecter">GÉNIE DES SYSTÈMES INDUSTRIELS</a>
                </div>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-5" data-toggle="dropdown"  id="se-connecter">
                  SYLLAB
                </a>
                <div class="dropdown-menu dropdown-menu-right " >
                  <a class="dropdown-item"  href="Etudiant.php"  id="se-connecter">Espace Etudiant</a>
                  <a class="dropdown-item" href="Formateur.php"  id="se-connecter">Espace Formateur</a>
                  <a class="dropdown-item" href="login_admin.php"   id="se-connecter">Espace administration</a>
                </div>
              </li>
              
              <li class="nav-item">
                <a class="nav-link mr-5" href="contact.php"  id="se-connecter" >CONTACT</a>
              </li>  
            </ul>
        </div>
    </nav>
    <style>
        .nav-item {
           cursor: pointer;
           
       }
       .navbar-nav .nav-item .nav-link:hover {
  color: red;
  
}
.navbar-nav .nav-item .nav-link {
  position: relative;
}

.navbar-nav .nav-item .nav-link:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 2px;
  background-color: red;
  bottom: -4px;
  left: 0;
  transform: scaleX(0);
  transition: transform 0.3s ease-in-out;
}

.navbar-nav .nav-item .nav-link:hover:before {
  transform: scaleX(1);
}
#se-connecter {
  transition: transform 0.3s ease-in-out;
}

#se-connecter:hover {
  transform: scale(1.4);
}
    </style>

  




