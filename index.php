<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Grid</title>
</head>
<body>
<!-- Include navigation -->
  <?php include_once('_inc/nav/main.php'); ?>


    <?php
      switch( $_GET['page'] ) {
        case 'company':
          include('_inc/pages/company.php');
          break;
        case 'contact':
          include('_inc/pages/contact.php');
          break;
        case 'services':
          include('_inc/pages/services.php');
          break;
        case 'gallery':
          include('_inc/pages/gallery.php');
          break;
        default:
          include('_inc_/pages/home.php');
          break;
      }
      
      if( empty( $_GET['page'] ) ) {
        include('_inc/highlight/main.php');
        include('_inc/pages/home.php');
      }
    ?>

  <footer>
    <a href="#"><i class="fab fa-facebook fb"></i></a>
    <a href="#" class="privacy">Privacy & Cookies Policy</a>
    <p class="copywrite">Designed and Developed by <a href="#" class="fb-blue tdn">APLogic</a> | All Rights Reserved</p>
  </footer>


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