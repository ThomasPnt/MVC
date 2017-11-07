<?php 
  define('View', 'View/');
  define('Controller', 'Controller/');
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Didier Motte - Antiquité, Décoration</title>
  </head>

  <body>
    <?php 
      include(View . 'header.php');

      $page = isset($_GET['page']) ? htmlentities($_GET['page']) : 'default';
      switch ($page) {
        case 'presentation':
          include(Controller . 'presentationController.php');
          $controller = new presentationController();
          break;
	      case 'stock':
          include(Controller . 'stockController.php');
          $controller = new stockController();
          break;
	      case 'contact':
          include(Controller . 'contactController.php');
          $controller = new contactController();
          break;
        default:
  	      include(Controller . 'presentationController.php');
  	      $controller = new presentationController();
  	      break;
	    }
      $controller->run();
    
      include(View . 'footer.php'); 
    ?>
  </body>
</html>
