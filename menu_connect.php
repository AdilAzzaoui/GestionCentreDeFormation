
<?php require("bootstrap.php"); ?>


<!-- Navbar -->
<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top"  >
  <div class="container">
  <a class="navbar-brand" href="#">
          <img src="Photos/Gc_cercle.png" alt="logo" style="height:50px;" class="mr-5">
        </a>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" href="connect_formateur.php">Accueil</a>

        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        
          <a class="nav-link" href="Sedeconnecter.php">Se déconnecter</a>
        </li>
      </ul>
    </div>
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
    </style>
