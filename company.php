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
          <li><a href="/index.php">Home</a></li>
          <li><a href="/company.php">Company</a></li>
          <li><a href="/services.php">Services</a></li>
          <li><a href="/gallery.php" >Gallery</a></li>
          <li><a href="/contact.php" class="last">Contact</a></li>
        </ul>
      </nav>
      
      <section class="main" id="company">
        <h1 class="title">Our Company<div class="underline"></div></h1>
        <div class="grid">
          
          <p class="grid-item text bold orange grid-left-top">In 1990 Buildcraft Landscaping was first established as a two man business. It has grown rapidly via local advertising, recommendations and word of mouth.</p>
          <a data-fancybox="gallery" href="https://dummyimage.com/700x300/000/fff"><img src="https://dummyimage.com/700x300/000/fff" alt="Content image" class="grid-item image grid-right-top"></a>
          
          <a data-fancybox="gallery" href="https://dummyimage.com/700x300/000/fff"><img src="https://dummyimage.com/700x300/000/fff" alt="Content image" class="grid-item image grid-left-mid"></a>
          <p class="grid-item text green roboto-light grid-right-mid">Our company continues to build on our reputation through expanding our portfolio of services. We work with commercial and private clients, architects and garden designers throughout Surrey and South London , with our broad range of services that we offer has expanded beyond what even our expectations were.</p>
          
          <p class="grid-item text orange roboto-light ml0 grid-left-bottom">Buildcraft Landscaping, in just a few years on, has doubled its permanent staff and during the peak seasons hired additional workers. Investing in specialist equipment and customised vehicles show that Buildcraft Landscaping is a true gardening force to contend with!</p>
          <a data-fancybox="gallery" href="https://dummyimage.com/700x300/000/fff"><img data-lazy="https://dummyimage.com/700x300/000/fff" id="lazy" class="grid-item image grid-right-bottom" alt="Content Image"></a>
        </div>
        <p class="text quote orange">We promise to provide you with the highest quality, comprehensive service
          that covers all aspects of landscape maintenance and construction. <p class="green"><b>Joseph</b> - <em>Company Owner</em></p></p>
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