
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="styles.css" />

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