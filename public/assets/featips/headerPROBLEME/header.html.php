<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./css/header.css" rel="stylesheet" type="text/css" />
  <title>Header</title>
</head>

<body>
  <header>
    <div class="top-nav-root" id="root">
      <div id="top-nav">
        <nav role="navigation" id="topnav_menu">
          <div class="logo-nav">
            <a href="#"><img class="featips-logo" src="assets/logo3.png" alt="FeaTips-Logo" /></a>
          </div>
          <div class="nav-bar">
            <div class="container">
              <div class="lien">
                <ul class="first-nav">
                  <li><a href="#">Articles</a></li>
                  <li><a href="#">Programmes</a></li>
                  <li><a href="#">Forum</a></li>
                </ul>
              </div>
              <div class="btn-connexion-inscription">
                <div class="btn btn-1">Se connecter</div>
                <div class="btn btn-2">S'inscrire</div>
              </div>
              <div class="btn-account-on">
                <div class="btn btn-account">Mon compte</div>
              </div>
            </div>
          </div>
      </div>
      </nav>
      <!-- responsive part -->
      <div class="top-nav-responsive-full">
        <!-- hamburger icon -->
        <a id="topnav_hamburger_icon" href="javascript:void(0);" onclick="showResponsiveMenu()">
          <span></span>
          <span></span>
          <span></span>
        </a>
        <!-- Responsive Menu -->
        <div class="logo-nav-responsive">
          <a href="#"><img class="featips-logo" src="assets/logo3.png" alt="FeaTips-Logo" /></a>
        </div>
        <!-- pour cette div, j'ai essayé de reproduire le menu déroulant du dessus avec la fonction onclick sur js mais çe ne s'affiche pas-->
        <div id="my-account">
          <a id="my-account-icon-nav" href="javascript:void(0);" onclick="showResponsiveAccountMenu()"><img class="my-account-icon" src="assets/my-account.png" /></a>
          <div id="my-account-items">
            <ul>
              <li><a href="#">Se connecter</a></li>
              <li><a href="#">S'inscrire</a></li>
            </ul>
          </div>
          </nav>
        </div>
      </div>
      <!-- Responsive Navigation -->
      <nav role="navigation" id="topnav_responsive_menu">
        <ul>
          <li><a href="#">Articles</a></li>
          <li><a href="#">Programmes</a></li>
          <li><a href="#">Forum</a></li>
        </ul>
      </nav>
    </div>
    </div>
  </header>
</body>
<script src="./js/script-header.js"></script>

</html>