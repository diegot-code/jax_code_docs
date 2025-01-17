<?php
$contents = [
    [
        'heading' => 'Jax Code Academy',
        'description' => 'Jax Code Academy is the premiere coding school in Northeast Florida.',
        'styles' => 'background-color:black;color:white;padding:20px;',
        'code' => "<!DOCTYPE html>\n  <html>\n    <head>\n      <title>Hello World</title>\n    </head>\n   <body>\n      Hello, World!\n   </body>\n </html>"
    ]
];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Code Block</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
  <main>
    <div class="container">
        <?php foreach ($contents as $content): ?>
            <div style="<?= $content['styles']; ?>">
                <h2><?= $content['heading']; ?></h2>
                <p><?= $content['description']; ?></p>
                <pre><code><?= htmlspecialchars($content['code']); ?></code></pre>
            </div>
        <?php endforeach; ?>
    </div>
</main>
  </body>
</html>
