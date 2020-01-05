<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Grid</title>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <!-- Carousel -->
    <link rel="stylesheet" href="css/carousel.css">
</head>
<body>

    <section class="header">
        <img src="https://dummyimage.com/250x100/000/fff" alt="Buildcraft Logo">
        
        <div class="contact">
          <p>Call us: 07828 882 882</p>
          <a href="#" class="btn">Contact us</a>
        </div>
      </section>
      
      <nav>
      <ul>
          <li><a href="/index.php">Home</a></li>
          <li><a href="/company.php">Company</a></li>
          <li><a href="/services.php">Services</a></li>
          <li><a href="/gallery.php" >Gallery</a></li>
          <li><a href="/contact.php" class="last">Contact</a></li>
        </ul>
      </nav>

      <section class="slides owl-carousel owl-theme">
        <div id="slide" class="h60" style="background: url(images/fff.png);">
          <div class="hero-box">
          <h2 class="text orange mt0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nostrum in pariatur amet dolor placeat atque iure, q</h2>
          <a href="#" class="btn">Contact us</a>
          </div>
        </div>

        <div id="slide" class="h60" style="background: url(images/fff.png);">
          <div class="hero-box">
          <h2 class="text orange mt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nostrum in pariatur amet dolor placeat atque iure, q</h2>
          <a href="#" class="btn">Contact us</a>
          </div>
        </div>
      </section>

      <section class="main" id="home">
      <h2 class="text orange m15">Our highly skilled landscapers will be able to make an assessment of your garden, then transform it into the ideal outdoor living space or landscape.</h2>
      <p class="sub-text roboto"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus reprehenderit similique tenetur provident, eius optio quia eligendi, nihil earum, sed veritatis id. Suscipit nesciunt omnis perferendis nemo accusantium veritatis eum.</p>
      </section>

      <footer>
       <a href="#"><i class="fab fa-facebook fb"></i></a>
        <a href="#" class="privacy">Privacy & Cookies Policy</a>
        <p class="copywrite">Designed and Developed by <a href="#" class="fb-blue tdn">APLogic</a> | All Rights Reserved</p>
      </footer>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

<script src="js/owlcarousel/owl.carousel.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="node_modules/intersection-observer/intersection-observer.js"></script>
<script src="js/lazy.js"></script>

<script>
  $(document).ready(function() {
    console.log('test');
    
    $('.owl-carousel').owlCarousel({
      loop: true,
      items: 1,
      nav: true,
    });
  });
</script>

</body>
</html>