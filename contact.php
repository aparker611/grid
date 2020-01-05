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
      
      <section class="main" id="contact">
        <h1 class="title">Contact us<div class="underline"></div></h1>

        <section class="grid">

          <img src="https://dummyimage.com/350/000/fff" alt="" class="grid-image-one">
          <div class="box box-one">
            <h2 class="title green">Allow us to give you a straight forward answer</h2>
            <p class="sub-text">
              You know those very annoying customer service departments that some companies have that don't have any idea what they are talking about? It is impossible getting any straight answers from them.
Thankfully, I am very pleased to inform you that our company is not one of them.
            </p>
          </div>

          <img src="https://dummyimage.com/350/000/fff" alt="" class="grid-image-two">
          <div class="box box-two">
            <h2 class="title green">Good Customer Service</h1>
            <p class="sub-text">
              Our customer service staff is helpful, efficient and professional. No matter what you need to know, we guarantee to provide you with useful answers. We know just how annoying it can be when so-called advisers have no clue.
            </p>
          </div>

          <img src="https://dummyimage.com/350/000/fff" alt="" class="grid-image-three">
          <div class="box box-three">
            <h2 class="title green">High Standards</h2>
            <p class="sub-text">
              We have set very high standards for our customer service department. If you need gardening services in the London area, speak to one of our experts today at 07983 269601 to receive your free quote.
            </p>
          </div>

        </section>

        <section class="contact">
          <form action="">
            <div class="row">
              <div class="grid-2">
                <input type="text" name="name" placeholder="Your name">
                <input type="text" name="email" placeholder="Your Email">
              </div>
              <div class="row double">
                <input type="text" name="subject" placeholder="Subject" class="double">
                <textarea name="message" placeholder="message" cols="30" rows="10"></textarea>
              </div>
            </div>
            <div class="center"><a href="#" class="btn">Send</a></div>
          </form>
        </section>
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