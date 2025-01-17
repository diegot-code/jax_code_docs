<?php

// Dynamically determine the base URL to ensure compatibility across nested directories
$scriptDir = dirname($_SERVER['PHP_SELF']);
$baseURL = str_repeat('../', substr_count(trim($scriptDir, '/'), '/'));

$links = [
    [
        "rel" => "stylesheet",
        "url" => "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css",
    ],
    [
        "rel" => "stylesheet",
        "url" => $baseURL . "styles.css",
    ]
];

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php
    foreach ($links as $link) {
        ?>
         <link rel="<?= htmlspecialchars($link['rel']) ?>" href="<?= htmlspecialchars($link['url']) ?>">
        <?php
    }
    ?>

    <title><?= $pageName ?></title>
  </head>

  <body>
    <header>
      <div class="container flex space-between">
        <div>
          JAX<span>CODE</span> DOCS <br />
          Home / Syllabus MyDocs / <?= $pageName ?> <br>
          <?php
            if ($pageName != "Home") {
                ?>
                <a href="./index.php">Back</a>
                <?php
            }
        ?>
        </div>
        <h1 class=""><?= $pageName ?></h1>
      </div>
    </header>