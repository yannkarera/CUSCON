<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>homepage</title>
</head>
<body>
  
  
  <section class="first">
    
    <div class="homepage">
      <img src="<?= BASE_URL ?>assets/img/gaming.webp" alt="gaming" class="hero" />
      <a href="<?= BASE_URL ?>catalog"><button class="new">NEW</button></a>
    </div>
  </section>
  <h1 id="aboutus">ABOUT US</h1>
  <p>
  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
  ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
  parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
  pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
  pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
  rhoncus ut
</p>

<section class="second">
  <div class="homepage2">
    <img src="<?= BASE_URL ?>assets/img/mann.avif" alt="controller" class="hero" />
    <div class="container">
      
      <a href="http://localhost/CUSCON/index.php?page=catalog"><button class="controllers">CONTROLLERS</button></a>
      
    </div>
    
  </div>
  <div class="container2">
    
    
    <img src="<?= BASE_URL ?>assets/img/audio.png" alt="casque" class="hero2" />
    <a href="http://localhost/CUSCON/index.php?page=others"><button class="others">OTHERS</button></a>
    <img src="<?= BASE_URL ?>assets/img/accessories.jpg" alt="others" class="hero3" />
    
    
  </div>
  
  <div class="avis">
    <script src="home.js"></script>
    <div class="avis-client">
      <div class="étoiles" data-rating="4"></div>
      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
    </div>
    <div class="avis-client">
      <div class="étoiles" data-rating="5"></div>
      <p>"Integer nec odio. Praesent libero. Sed cursus ante dapibus diam."</p>
    </div>
    <div class="avis-client">
      <div class="étoiles" data-rating="3"></div>
      <p>"Maecenas nec odio et ante tincidunt tempus."</p>
    </div>
  </div>
</section>
<section class="third">
<div class="container3">
  <!-- Boutons radio pour choisir la catégorie -->
  <div class="category-selector">
    <label><input type="radio" name="category" value="pspc" checked> PS/PC</label>
      <label><input type="radio" name="category" value="xbox"> XBOX</label>
      <label><input type="radio" name="category" value="nintendo"> Nintendo</label>
    </div>
    
    <!-- Carrousel pour choisir la sous-catégorie -->
    <div class="carousel-container">
      <button class="prev">&#10094;</button>
      <div class="carousel">
        <div class="slide active">
              <p>MUSIC</p>
              <img src="<?= BASE_URL ?>assets/img/music.png" alt="Music">
              <button class="voir-plus" data-category="music">Voir plus</button>
            </div>
            <div class="slide">
              <p>SPORTS</p>
            <img src="<?= BASE_URL ?>assets/img/sports.png" alt="Sports">
            <button class="voir-plus" data-category="sports">Voir plus</button>
          </div>
          <div class="slide">
            <p>FILMS</p>
            <img src="<?= BASE_URL ?>assets/img/cinema.png" alt="Films">
            <button class="voir-plus" data-category="films">Voir plus</button>
          </div>
          </div>
          <button class="next">&#10095;</button>
        </div>
        
        
        
      </div>
    </section>      

    <script src="<?= BASE_URL ?>assets/js/carroussel.js"></script>
    <script src="<?= BASE_URL ?>assets/js/carroussel2.js"></script>

      
    </body>
    </html>