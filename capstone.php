<?php

$capstone_example_ideas = [
  "Inventory Management System" => "A web app for businesses to manage inventory, including adding,
  editing, and removing products, tracking stock levels, and generating
  reports. Users can create accounts and set permissions for inventory
  control.",
  "Library Management System" => "A system that allows libraries to manage books, members, and
  borrow/return transactions. It includes features for searching,
  reserving, and tracking borrowed items. Users can register, log in,
  and view their borrowing history.",
  "Expense Tracker" => "An application that helps users track personal or business expenses.
  Users can categorize expenses, view spending reports, set budget
  limits, and receive alerts for overspending.",
  "Blog Platform" => "A content management system where users can register, log in, create,
  edit, and delete blog posts. It includes features like comments, tags,
  categories, and post management. An admin panel can be added for
  managing users and content.",
  "Appointment Booking System" => "A web app for booking appointments, such as for doctors, hair salons,
  or consultants. Users can view available time slots, book
  appointments, receive confirmations, and manage their bookings.",
  "Quiz Application" => "A web app that allows users to take quizzes on various topics. Admins
  can create quizzes, add questions, set answers, and view results.
  Users can register, take quizzes, and view their scores.",
  "Ticketing System" => "A platform for events where users can browse events, book tickets, and make payments. Admins can manage events, view bookings, and handle customer inquiries.",
  "Portfolio Website Builder" => "An application that allows users to create and customize their personal or professional portfolios. Users can add projects, skills, experiences, and other sections, with the ability to preview and publish their site.",
  "Customer Feedback System" => "A tool for businesses to collect feedback from their customers. Users can submit feedback, rate services/products, and view other reviews. Admins can manage feedback, respond to reviews, and generate reports.",
  "Property Management System" => "A web app for property managers to list properties, track tenant information, handle rent payments, and schedule maintenance. Tenants can log in to view their lease details, make payments, and submit maintenance requests."
]
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quick Start</title>
  </head>
  <body>
    <a href="./index.php">Back</a>
    <h1>Capstone</h1>
    <div id="capstone-details">
      <div>
      Objective: Develop a full-stack PHP application that implements all CRUD
      operations and includes user registration and login functionality.
    </div>
    <div>
      Technical Requirements: Back-end: Use PHP and MySQL to handle server-side
      logic and database interactions. Secure the application against SQL
      injection using prepared statements or other appropriate methods.
      Optionally, implement MVC architecture after meeting the core
      requirements. Front-end: Build the user interface with the skills acquired
      during the bootcamp. Design guidance is available upon request.
    </div>
    <div>
      Project Hosting: Host the application on Opalstack, with setups provided
      during the capstone phase.
    </div>
    <div>
      Project Scope: Students can choose the complexity of their project beyond
      the minimum requirements. The minimum functional application is sufficient
      for a full grade, while additional features enhance the portfolio.
    </div>
    <div>
      Design and Templates: Use templates for building pages. There's no
      mandatory design standard unless requested or if students focus on
      front-end aspects.
    </div>
    <div>
      Evaluation and Support: Projects will be assessed based on the fulfillment
      of back-end and front-end requirements outlined in the initial guidelines.
      Continuous support is available, and questions are encouraged at any stage
      of the project.
    </div>
    <div>
      Project Options: Choose from suggested projects like Recipe Manager, Task
      Manager, Student Management System, etc., or create a custom idea.
    </div>
    <div>
      Collaboration:Primarily individual projects, but group work is allowed
      with prior notification.
    </div>
    <div>
      Documentation:Include a README file and appropriate code comments
      explaining the functionality and structure of your project.
    </div>
    <div>
      Timeline: Projects are due during the last two weeks of the bootcamp,
      allowing sufficient time for completion and feedback.
    </div>
    </div>
    
    <div class="example">
      <?php
      foreach ($capstone_example_ideas as $name => $summary) {
      ?>
      
      <details>
        <summary><?= $name ?></summary>
        <p><?= $summary ?></p>
      </details>
      <?php
    }
    ?>
    </div>
  </body>
</html>
