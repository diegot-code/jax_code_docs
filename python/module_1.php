<?php

$lessons = [
  "Data Types" => [
    "String" => "'Lorem ipsom dolor'",
    "Int" => "64, 73, 12, 3, 90",
    "Float" => "55.32, 64.0, 1.02, 14.00000004"
  ],
  "Operators" => [
    "Arithmetic" => "+, -, *, /, %, **",
    "Comparison" => "==, !=, >, <, >=, <=",
    "Logical" => "and, or, not"
  ],
  "Conditionals / Control Flow" => [
    "If Statements" => "if, elif, else",
    "Loops" => "for, while",
    "Break & Continue" => "break, continue"
  ],
  "Functions" => [
    "Defining" => "def function_name():",
    "Parameters" => "def add(a, b):",
    "Return" => "return value"
  ],
  "lesson5" => "Details",
  "lesson6" => "Details",
  "lesson7" => "Details",
  "lesson8" => "Details"
];

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../styles.css" />

    <title>Quick Start</title>
  </head>
  <body>
    <header>
      <div class="container flex space-between">
        <div>
          JAX<span>CODE</span> DOCS <br />
          Home / Syllabus MyDocs <br />
          <a href="../">Back</a>
        </div>
        <h1 class="">Python</h1>

      </div>
    </header>
    <main id="lessons">
    <?php foreach ($lessons as $lessonTitle => $details) {
        ?>
          <div class="lesson">
              <h3><?= $lessonTitle ?></h3>
              <video class="lv-cont" controls poster="" >
                <source class="lv-vid" src="miniTerminal.mp4" type="video/mp4">
              </video>
              <ul class="lesson_details">
                <?php
                foreach ($details as $topic => $spec) {
                  ?>
                  <li><?= $topic ?> : <?= $spec ?></li>
                <?php
                }
                  ?>
              </ul>
          </div>
        <?php
      }
      ?>
    </main>

    </div>
  </body>
</html>