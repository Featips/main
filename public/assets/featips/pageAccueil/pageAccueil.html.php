<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/pageAccueil.css" />
  <link rel="stylesheet" href="../splide-3.6.9/dist/css/splide.min.css">



  <title>Page d'Accueil</title>
</head>

<body>
  <?php require_once 'header.html.php'; ?>

  <div class="banniere-accueil">
    <div class="banniere-accueil-img"></div>
    <p>Bienvenue sur <span id="brand1">FeaTips.fr</span>. <br>Apprenez à devenir votre propre coach sportif !</p>
  </div>
  <main>
    <section class="carousel">
      <h2>Articles à la une</h2>
      <div class="splide">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide"><a href="#"><img src="assets/imgFeaTips/BeachVolley.PNG" alt="beach-volley" />
                <div class="description-article">
                  <p class="title-article">Titre de l'article</p>
                  <p class="description-text">Sit amet consectetur adipisicing elit. Vel sint consequatur aperiam? Libero est commodi autem voluptate, quidem nihil praesentium vero tenetur, magni numquam eaque magnam doloremque repellat consectetur iste.</p>
                  <p class="authors">Auteurs</p>
                </div>
              </a></li>
            <li class="splide__slide"><a href="#"><img src="assets/imgFeaTips/juliacha.JPG" alt="Climb moutain" />
                <div class="description-article">
                  <p class="title-article">Titre de l'article</p>
                  <p class="description-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel sint consequatur aperiam? Libero est commodi autem voluptate, magni numquam eaque magnam doloremque repellat consectetur iste.</p>
                  <p class="authors">Auteurs</p>
                </div>
              </a></li>
            <li class="splide__slide"><a href="#">
                <img src="assets/imgFeaTips/basketball-court-g55e624258_1920.jpg" alt="basketball-court" />
                <div class="description-article">
                  <p class="title-article">Titre de l'article</p>
                  <p class="description-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel sint consequatur aperiam? Libero est commodi autem voluptate, quidem nihil praesentium vero tenetur, magni numquam eaque magnam doloremque repellat consectetur iste.</p>
                  <p class="authors">Auteurs</p>
                </div>
              </a></li>
            <li class="splide__slide"><a href="#">
                <img src="assets/imgFeaTips/basketball-court-g55e624258_1920.jpg" alt="basketball-court" />
                <div class="description-article">
                  <p class="title-article">Titre de l'article</p>
                  <p class="description-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel sint consequatur aperiam? Libero est commodi autem voluptate, repellat consectetur iste.</p>
                  <p class="authors">Auteurs</p>
                </div>
              </a></li>
          </ul>
        </div>
      </div>
    </section>
    <section class="coachs">
      <h2>Nos coachs</h2>
      <div class="grid">
        <div class="item">
          <div class="item-image">
            <img src="assets/imgFeaTips/coach6.jpg" alt="coach 1">
          </div>
          <div class="item-content">
            <a href="#">
              <h4 class="item-content-title">
            </a>
            John Doe
            </h4>
            <p class="item-content-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Fusce vel malesuada risus, sit amet pharetra dolor.
            </p>
            <div class="medias-coachs">
              <ul class="liste-medias-coachs">
                <li>
                  <a href="#"><img src="assets/medias/instagram-icon.png" alt="Logo instagram" /></a>
                </li>
                <li>
                  <a href="#"><img src="assets/medias/youtube-icon.png" alt="Logo Youtube" /></a>
                </li>
                <li>
                  <a href="#"><img src="assets/medias/tiktok-icon.png" alt="Logo tiktok" /></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="item-image">
            <img src="assets/imgFeaTips/coach4.jpg" alt="">
          </div>
          <div class="item-content">
            <h4 class="item-content-title">
              Jane Doe
            </h4>
            <p class="item-content-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Fusce vel malesuada risus, sit amet pharetra dolor.
            </p>
          </div>
          <div class="medias-coachs">
            <ul class="liste-medias-coachs">
              <li>
                <a href="#"><img src="assets/medias/instagram-icon.png" alt="Logo instagram" /></a>
              </li>
              <li>
                <a href="#"><img src="assets/medias/youtube-icon.png" alt="Logo Youtube" /></a>
              </li>
              <li>
                <a href="#"><img src="assets/medias/tiktok-icon.png" alt="Logo tiktok" /></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="item">
          <div class="item-image">
            <img src="assets/imgFeaTips/coach3.jpg" alt="">
          </div>
          <div class="item-content">
            <h4 class="item-content-title">
              John Doe
            </h4>
            <p class="item-content-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Fusce vel malesuada risus, sit amet pharetra dolor.
            </p>
          </div>
          <div class="medias-coachs">
            <ul class="liste-medias-coachs">
              <li>
                <a href="#"><img src="assets/medias/instagram-icon.png" alt="Logo instagram" /></a>
              </li>
              <li>
                <a href="#"><img src="assets/medias/youtube-icon.png" alt="Logo Youtube" /></a>
              </li>
              <li>
                <a href="#"><img src="assets/medias/tiktok-icon.png" alt="Logo tiktok" /></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="item">
          <div class="item-image">
            <img src="assets/imgFeaTips/coach5.webp" alt="">
          </div>
          <div class="item-content">
            <h4 class="item-content-title">
              Jane Doe
            </h4>
            <p class="item-content-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Fusce vel malesuada risus, sit amet pharetra dolor.
            </p>
          </div>
          <div class="medias-coachs">
            <ul class="liste-medias-coachs">
              <li>
                <a href="#"><img src="assets/medias/instagram-icon.png" alt="Logo instagram" /></a>
              </li>
              <li>
                <a href="#"><img src="assets/medias/youtube-icon.png" alt="Logo Youtube" /></a>
              </li>
              <li>
                <a href="#"><img src="assets/medias/tiktok-icon.png" alt="Logo tiktok" /></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="item">
          <div class="item-image">
            <img src="assets/imgFeaTips/coach3.jpg" alt="coach 2">
          </div>
          <div class="item-content">
            <h4 class="item-content-title">
              John Doe
            </h4>
            <p class="item-content-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Fusce vel malesuada risus, sit amet pharetra dolor.
            </p>
          </div>
          <div class="medias-coachs">
            <ul class="liste-medias-coachs">
              <li>
                <a href="#"><img src="assets/medias/instagram-icon.png" alt="Logo instagram" /></a>
              </li>
              <li>
                <a href="#"><img src="assets/medias/youtube-icon.png" alt="Logo Youtube" /></a>
              </li>
              <li>
                <a href="#"><img src="assets/medias/tiktok-icon.png" alt="Logo tiktok" /></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="item">
          <div class="item-image">
            <img src="assets/imgFeaTips/coach6.jpg" alt="coach 1">
          </div>
          <div class="item-content">
            <a href="#">
              <h4 class="item-content-title">
            </a>
            John Doe
            </h4>
            <p class="item-content-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Fusce vel malesuada risus, sit amet pharetra dolor.
            </p>
          </div>
          <div class="medias-coachs">
            <ul class="liste-medias-coachs">
              <li>
                <a href="#"><img src="assets/medias/instagram-icon.png" alt="Logo instagram" /></a>
              </li>
              <li>
                <a href="#"><img src="assets/medias/youtube-icon.png" alt="Logo Youtube" /></a>
              </li>
              <li>
                <a href="#"><img src="assets/medias/tiktok-icon.png" alt="Logo tiktok" /></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="cta-forum">
      <div class="forum-img"></div>
      <a href="#">
        <p>Rejoignez la communauté <span id="brand2">FeaTips</span> et entraidez-vous<br>dans notre Forum dédié !</p>
      </a>
    </section>
  </main>
  <?php require_once 'footer.html.php'; ?>
</body>
<script src="../splide-3.6.9/dist/js/splide.min.js"></script>
<script src="./js/script.js"></script>

</html>