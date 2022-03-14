<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>php-ajax-dischi versione statica</title>
  <?php
    include "data.php";
  ?>
</head>
<body>
  <!--Header-->
  <header>

    <div class="container">

      <img src="img/logo.png" alt="logo" />

    </div>

  </header>
  <!--Fine Header-->

  <!--CD container-->
  <div class="cds-container container">

    <?php
      foreach ($database as $value) {
        ?>

          <div class="cd">
            <img src="<?php echo $value["poster"]; ?>" alt="img">
            <h3><?php echo $value["title"]; ?></h3>
            <span class="author"><?php echo $value["author"]; ?></span>
            <span class="year"><?php echo $value["year"]; ?></span>
          </div>
          
        <?php
      }
    ?>
  </div>
  <!--Fine CD container-->
</body>
</html>