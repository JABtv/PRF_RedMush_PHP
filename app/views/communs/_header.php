<!DOCTYPE html>
<html lang="en" class="theme-light">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RedMush</title>
    <!-- SEO -->
    <meta
        name="description"
        content="Le streetwear réinventé. Découvre notre collection de vêtements et d'accessoires streetwear pour un style urbain et affirmé. Des pièces uniques et tendances pour te démarquer au quotidien." />
    <!-- Link Perso. -->
    <link rel="stylesheet" href="public/src/style/style.css" />
</head>
<body>
<header>
    <p>FRAIS DE PORT OFFERTS À PARTIR DE 80€</p>
    <nav class="navbar">
      <div class="left">
        <button popovertarget="userPop">
          <img
            src="public/assets/images/icons/black/iconUser.png"
            alt="User" />
        </button>
        <div id="userPop" popover="manual">
          <h2>Connexion</h2>
          <form action="" method="post">
            <input type="email" id="email" name="email" placeholder="E-mail"/>
            <input type="password" id="pwd" name="pwd" placeholder="Mot De Passe"/>
            <br>
            <div>
              <a href="#">Mot De Passe Oublier ?</a>
              <a href="Inscription">Pas encore inscrits ?</a>
            </div>
            <button>SE CONNECTER</button>
          </form>
        </div>


        <button popovertarget="shopPop">
          <img
            src="public/assets/images/icons/black/iconShoppingBag.png"
            alt="shoppingBag" />
        </button>

        <div id="shopPop" popover="manual">
          <div class="header">
            <h2>PANIER</h2>
            <button popovertarget="shopPop">
              <img src="public/assets/images/icons/black/iconClose.png" alt="Icon pour fermer le menu.">
            </button>
          </div>

          <div>

          </div>
        </div>


      </div>
      <div class="center">
        <img
          src="public/assets/images/Logo/logoGimpB.svg"
          alt="Logo"/>
        <h1>RedMush</h1>
      </div>
      <div class="right">
        <button popovertarget="menuPop">
          <img
            src="public/assets/images/icons/black/iconMenu.png"
            alt="burger" />
        </button>
        <div id="menuPop" popover="manual">
          <div class="header">
            <h2>MENU</h2>
            <button popovertarget="menuPop">
              <img src="public/assets/images/icons/black/iconClose.png" alt="Icon pour fermer le menu.">
            </button>
          </div>
          <form action="" method="post">
            <input type="search" id="searchBar" placeholder="Rechercher un article"/>
            <button type="submit">
              <img src="public/assets/images/icons/black/iconSearch.png" alt="Icon de recherche"/>
            </button>
          </form>
          <ul>
            <li class="bb">
              <a href="#">HOMME</a>
            </li>
            <li>
              <a href="#">FEMME</a>
            </li>
            <li>
              <a href="#">ENFANT</a>
            </li>
            <li>
              <a href="#">ACCESSOIRES</a>
            </li>
            <li>
              <a href="#">NOUVEAUTÉS</a>
            </li>
            <li>
              <a href="#">PROMO</a>
            </li>
            <li>
              <a href="#">CAPSULE</a>
            </li>
          </ul>
          <div class="reseaux">
            <a href="#">
              <img src="public/assets/images/icons/black/iconInstagram.png" alt="Lien vers la page Instagram du site.">
            </a>
            <a href="#">
              <img src="public/assets/images/icons/black/iconTiktok.png" alt="Lien vers la page TikTok du site.">
            </a>
            <a href="#">
              <img src="public/assets/images/icons/black/iconYoutube.png" alt="Lien vers la page Youtube du site.">
            </a>
          </div>
        </div>
      </div>
    </nav>
</header>

