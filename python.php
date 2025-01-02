<?php

$lessons = [
  "lesson1" => [
    "title" => "Module 1",
    "content" => ["Print", "Data Types", "Operators", "Conditionals/Control Flow", "Functions"],
    "path" => "./python/module_1.php"
  ],
  "lesson2" => [
    "title" => "Module 2",
    "content" => ["User Interaction/Inputs", "Operators", "Conditionals/Control Flow", "Functions"],
    "path" => "./python/module_2.php"
  ],
  "lesson3" => [
    "title" => "Module 3",
    "content" => ["Data Types", "Operators", "Conditionals/Control Flow", "Functions"],
    "path" => "./python/module_3.php"
  ],
  "lesson4" => [
    "title" => "Module 4",
    "content" => ["Data Types", "Operators", "Conditionals/Control Flow", "Functions"],
    "path" => "./python/module_4.php"
  ],
  "lesson5" => [
    "title" => "Module 5",
    "content" => ["Data Types", "Operators", "Conditionals/Control Flow", "Functions"],
    "path" => "./python/module_5.php"
  ]
];

$pageName = "Python";

include_once "temp_header.php";

?>

    <main id="lessons">
    <?php foreach ($lessons as $lesson) {
        ?>
          <a href="<?= $lesson["path"] ?>" class="lesson">
              <h3><?= $lesson["title"] ?></h3>
              <video class="lv-cont" controls poster="" >
                <source class="lv-vid" src="miniTerminal.mp4" type="video/mp4">
              </video>
              <ul class="lesson_details">
                <?php
                foreach ($lesson["content"] as $topic) {
                  ?>
                  <li><?= $topic ?></li>
                <?php
                }
                  ?>
              </ul>
              </a>
        <?php
      }
      ?>
    </main>

    </div>
  </body>
</html>
