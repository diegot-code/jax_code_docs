<?php

$lessons = [
  "lesson1" => [
    "title" => "Python Basics",
    "content" => ["Intro to Python", "Syntax and Basics", "Variables and Data Types", "Operators"],
    "path" => "./python/module_1.php"
  ],
  "lesson2" => [
    "title" => "Control Flow",
    "content" => ["Conditional Statements", "Loops"],
    "path" => "./python/module_2.php"
  ],
  "lesson3" => [
    "title" => "Functions and Modules",
    "content" => ["Functions", "Modules and Libraries"],
    "path" => "./python/module_3.php"
  ],
  "lesson4" => [
    "title" => "Data Structures",
    "content" => ["Strings", "Lists", "Dictionaries", "Tuples and Sets"],
    "path" => "./python/module_4.php"
  ],
  "lesson5" => [
    "title" => "OOP Basics",
    "content" => ["Classes and Objects", "Encapsulation Basics"],
    "path" => "./python/module_5.php"
  ],
  "lesson6" => [
    "title" => "Modifying Files",
    "content" => ["File Handling"],
    "path" => "./python/module_6.php"
  ],
  "lesson7" => [
    "title" => "Error Handling",
    "content" => ["Exceptions"],
    "path" => "./python/module_7.php"
  ],
  "lesson8" => [
    "title" => "Advanced Foundation",
    "content" => ["List Comprehensions", "Intro to Libraries", "Intro to Automation"],
    "path" => "./python/module_8.php"
  ],
  "lesson9" => [
    "title" => "Python for Web Developers",
    "content" => ["Flask and Django overview"],
    "path" => "./python/module_9.php"
  ]
];

$pageName = "Python";

include_once "temp_header.php";

?>
<div class="container mt-5">
    <h1 class="text-center mb-4">Python Modules</h1>

    <!-- Expandable Accordion Cards -->
    <?php
    foreach ($lessons as $id => $lesson) {
        ?>
        <div class="accordion my-3" id="accordion-<?= $id ?>">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading-<?= $id ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $id ?>" aria-expanded="false" aria-controls="collapse-<?= $id ?>">
                        <?= $lesson['title'] ?>
                    </button>
                </h2>
                <div id="collapse-<?= $id ?>" class="accordion-collapse collapse" aria-labelledby="heading-<?= $id ?>" data-bs-parent="#accordion-<?= $id ?>">
                    <div class="accordion-body">
                        <ul>
                            <?php foreach ($lesson['content'] as $topic) { ?>
                                <li><?= $topic ?></li>
                            <?php } ?>
                        </ul>

                        <div class="go-to-lesson">
                          <a class="lesson-link" href="<?= $lesson['path'] ?>">Go to Lesson</a>
                        </div>

                        <div class="accordion mt-3" id="demoAccordion-<?= $id ?>">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="demoHeading-<?= $id ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#demoCollapse-<?= $id ?>" aria-expanded="false" aria-controls="demoCollapse-<?= $id ?>">
                                        Watch Demo
                                    </button>
                                </h2>
                                <div id="demoCollapse-<?= $id ?>" class="accordion-collapse collapse" aria-labelledby="demoHeading-<?= $id ?>" data-bs-parent="#demoAccordion-<?= $id ?>">
                                    <div class="accordion-body">
                                        <video controls class="w-100">
                                            <source src="<?= $lesson['path'] ?>" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>


  <?php
  include_once "temp_footer.php";

  ?>