<?php function draw_header($username) { 
/**
 * Draws the header for all pages. Receives an username
 * if the user is logged in in order to draw the logout
 * link.
 */?>
  <!DOCTYPE html>
  <html>

    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans+Condensed:300" rel="stylesheet">
    </head>

    <body>

      <header>
        <h1><a href="index.php"><i class="fas fa-bed"></i> Fare Niente</a></h1>
        <?php if ($username != NULL) { ?>
          <nav>
            <ul>
              <li><?=$username?></li>
              <li><a href="action_logout.php">Logout</a></li>
            </ul>
          </nav>
        <?php } ?>
      </header>    
<?php } ?>

<?php function draw_footer() { 
/**
 * Draws the footer for all pages.
 */ ?>
  </body>
</html>
<?php } ?>