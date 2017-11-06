<?php 
  define('View', 'View/');
  define('Controller', 'Controller/');

  $page = isset($_GET['action']) ? htmlentities($_GET['action']) : 'default';
  $controller = '';
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Didier Motte - Antiquité, Décoration</title>
  </head>

  <body>
    <?php 
      require_once(View . 'header.php');

      switch ($page) {
        case 'presentation':
          require_once(Controller . 'presentation.php');
          $controller = new presentationController();
          break;
	      case 'stock':
          require_once(Controller . 'stock.php');
          $controller = new stockController();
          break;
	      case 'contact':
          require_once(Controller . 'contact.php');
          $controller = new contactController();
          break;
	    }
      $controller->run();
    
      require_once(View . 'footer.php'); 
    ?>
  </body>
</html>
