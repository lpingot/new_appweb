

<!-- ce bloc de code vient de boostrap -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/appWeb/index.php">Mon projet Web</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/appWeb/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/appWeb/chat.php">Mini-chat</a>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/appWeb/blog.php">Blog/News</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mon profil
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php if(isset($_SESSION['ID'])) { ?>
              <li><a class="dropdown-item" href="profil.php">Profil</a></li>
              <li><a class="dropdown-item" href="deconnexion.php">Déconnexion</a></li>
            <?php }  else { ?>
              <li><a class="dropdown-item" href="http://localhost/appWeb/login.php">Se connecter</a></li>
              <li><a class="dropdown-item" href="http://localhost/appWeb/inscription.php">S'inscrire</a></li>
              <li><hr class="dropdown-divider"></li>
            <?php } ?>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/appWeb/webshop.php">Webshop</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

