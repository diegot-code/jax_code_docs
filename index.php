<?php

$sections = [
  "Quick Start" => "quick-start.php",
  "Web Development Foundations" => "foundations.php",
  "Related Topics" => "related-topics.php",
  "MERN Syllabus" => "mern.php",
  "LAMP Syllabus" => "lamp.php",
  "Python Syllabus" => "python.php"
];


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="styles.css" />

    <title>Jax Code Docs</title>
  </head>

  <body>
    <header>
      <div class="container flex space-between">
        <div>
          JAX<span>CODE</span> DOCS <br />
          Home / Syllabus MyDocs
        </div>
        <h1 class="">Web Developer Bootcamp</h1>
      </div>
    </header>

    <main class="container">
      <div class="">
      <?php foreach ($sections as $title => $url) {
        ?>
        <a href="<?= $url ?>">
                <div class="unit">
                    <h3><?= $title ?></h3>
                </div>
            </a>
        <?php
      }
      ?>
            
      </div>
    </main>
  </body>
</html>
