<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" 
      content="default-src 'self' data: gap: 'unsafe-eval' ws: ;
               style-src * 'unsafe-inline';
               script-src *;
               media-src *;
               font-src *;
               connect-src *;
               img-src * data: content:;" >
    <title>Grid</title>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
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
          <li><a href="/index.php">HOME</a></li>
          <li><a href="/index.php">COMPANY</a></li>
          <li><a href="/contact.php">CONTACT</a></li>
          <li><a href="/services.php" >SERVICES</a></li>
          <li><a href="/gallery.php" class="last">GALLERY</a></li>
        </ul>
      </nav>
      
      <section class="main" id="gallery">
        <h1 class="title">Gallery <div class="underline"></div></h1>

        <div class="gallery-grid">
            <a data-fancybox="gallery" href="images/gallery/20170623_153137.jpg"><img src="images/gallery/20170623_153137.jpg" alt="" class="grid-item"></a>
            <a data-fancybox="gallery" href="images/gallery/buildcraftwimbledon1.jpg"><img src="images/gallery/buildcraftwimbledon1.jpg" alt="" class="grid-item"></a>
            <a data-fancybox="gallery" href="images/gallery/buildcraftwimbledon2-1.jpg"><img src="images/gallery/buildcraftwimbledon2-1.jpg" alt="" class="grid-item"></a>
            <a data-fancybox="gallery" href="images/gallery/buildcraftwimbledon3.jpg"><img src="images/gallery/buildcraftwimbledon3.jpg" alt="" class="grid-item"></a>
            <a data-fancybox="gallery" href="images/gallery/buildcraftwimbledon4-1.jpg"><img src="images/gallery/buildcraftwimbledon4-1.jpg" alt="" class="grid-item"></a>
            <a data-fancybox="gallery" href="images/gallery/frontgarden.jpg"><img src="images/gallery/frontgarden.jpg" alt="" class="grid-item"></a>
            <a data-fancybox="gallery" href="images/gallery/g11.jpg"><img data-lazy="images/gallery/g11.jpg" alt="" class="grid-item" id="lazy"></a>
            <a data-fancybox="gallery" href="images/gallery/g13.jpg"><img data-lazy="images/gallery/g13.jpg" alt="" class="grid-item" id="lazy"></a>
            <a data-fancybox="gallery" href="images/gallery/g14.jpg"><img data-lazy="images/gallery/g14.jpg" alt="" class="grid-item" id="lazy"></a>
            <a data-fancybox="gallery" href="images/gallery/g9.jpg"><img data-lazy="images/gallery/g9.jpg" alt="" class="grid-item" id="lazy"></a>
            <a data-fancybox="gallery" href="images/gallery/gardendesign.jpg"><img data-lazy="images/gallery/gardendesign.jpg" alt="" class="grid-item" id="lazy"></a>
            <a data-fancybox="gallery" href="images/gallery/herman-phone-161.jpg"><img data-lazy="images/gallery/herman-phone-161.jpg" alt="" class="grid-item" id="lazy"></a>
            <a data-fancybox="gallery" href="images/gallery/herman-phone-194.jpg"><img data-lazy="images/gallery/herman-phone-194.jpg" alt="" class="grid-item" id="lazy"></a>
            <a data-fancybox="gallery" href="images/gallery/port1 (1).jpg"><img data-lazy="images/gallery/port1 (1).jpg" alt="" class="grid-item" id="lazy"></a>
            <a data-fancybox="gallery" href="images/gallery/port1.jpg"><img data-lazy="images/gallery/port1.jpg" alt="" class="grid-item" id="lazy"></a>
            <a data-fancybox="gallery" href="images/gallery/port3 (1).jpg"><img data-lazy="images/gallery/port3 (1).jpg" alt="" class="grid-item" id="lazy"></a>
            <a data-fancybox="gallery" href="images/gallery/port3.jpg"><img data-lazy="images/gallery/port3.jpg" alt="" class="grid-item" id="lazy"></a>
            <a data-fancybox="gallery" href="images/gallery/port4.jpg"><img data-lazy="images/gallery/port4.jpg" alt="" class="grid-item" id="lazy"></a>
            <a data-fancybox="gallery" href="images/gallery/port5.jpg"><img data-lazy="images/gallery/port5.jpg" alt="" class="grid-item" id="lazy"></a>
            <a data-fancybox="gallery" href="images/gallery/Steps.jpg"><img data-lazy="images/gallery/Steps.jpg" alt="" class="grid-item" id="lazy"></a>
        </div>
      </section>

      <footer>
       <a href="#"><i class="fab fa-facebook fb"></i></a>
        <a href="#" class="privacy">Privacy & Cookies Policy</a>
        <p class="copywrite">Designed and Developed by <a href="#" class="fb-blue tdn">APLogic</a> | All Rights Reserved</p>
      </footer>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="node_modules/intersection-observer/intersection-observer.js"></script>
<script src="js/lazy.js"></script>

</body>
</html>