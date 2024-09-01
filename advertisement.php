<?php
// Include the database connection file
include 'db_connect.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and check if they are set
    $ad_campaign_id = isset($_POST["ad_campaign_id"]) ? $_POST["ad_campaign_id"] : null;
    $budget = isset($_POST["budget"]) ? $_POST["budget"] : null;
    $advertisement_domain = isset($_POST["advertisement_domain"]) ? $_POST["advertisement_domain"] : null;
    $media_type = isset($_POST["media_type"]) ? $_POST["media_type"] : null;
    $message = isset($_POST["message"]) ? $_POST["message"] : null;

    // Prepare and bind SQL statement
    $sql = "INSERT INTO Advertisement (ad_campaign_id, budget, advertisement_domain, media_type, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Check if prepare succeeded
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("idsss", $ad_campaign_id, $budget, $advertisement_domain, $media_type, $message);

        // Execute SQL statement
        if ($stmt->execute()) {
            echo "New record created successfully";
            // Redirect to another page or display a success message
            header("Location: cl_dash.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error: Unable to prepare SQL statement";
    }
}

// Close connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketing C-16 - We're available for marketing</title>

  <!-- Custom CSS link -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- Google Font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body id="top">

  <!-- Header -->
  <header class="header" data-header>
    <div class="container">
      <a href="#" class="logo">Marketing C-16</a>

      <!-- Navigation -->
      <nav class="navbar container" data-navbar>
        <ul class="navbar-list">
          <li><a href="#home" class="navbar-link" data-nav-link>Home</a></li>
          <li><a href="#service" class="navbar-link" data-nav-link>Services</a></li>
          <li><a href="#project" class="navbar-link" data-nav-link>Project</a></li>
          <li><a href="#about" class="navbar-link" data-nav-link>About Us</a></li>
          <li><a href="#blog" class="navbar-link" data-nav-link>Blog</a></li>
          <li><a href="#contact" class="navbar-link" data-nav-link>Contact Us</a></li>
          <li><a href="cl_dash.php" class="btn btn-primary">Get Started</a></li>
        </ul>
      </nav>

      <!-- Navbar toggle button -->
      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>
    </div>
  </header>

  <!-- Advertisement Section -->
  <section class="section contact" id="contact" aria-label="contact">
    <div class="container">
      <h2 class="h2 section-title">Enter your advertisement details.</h2>
      <p class="section-text">
        We offer tailored advertisement solutions to meet your marketing needs. Please provide the following details so we can assist you better.
      </p>

      <!-- Advertisement Form -->
      <form action="" class="contact-form" method="POST">
        <div class="input-wrapper">
          <input type="number" name="budget" aria-label="budget" placeholder="Budget*" required class="input-field">
        </div>
        <div class="input-wrapper">
          <input type="text" name="advertisement_domain" aria-label="advertisement domain" placeholder="Advertisement Domain*" required class="input-field">
          <select name="media_type" aria-label="media type" required class="input-field">
            <option value="" disabled selected>Media Type</option>
            <option value="radio">Radio</option>
            <option value="tv">TV</option>
            <option value="newspaper">Newspaper</option>
          </select>
          <input type="text" name="region" aria-label="region" placeholder="Region*" required class="input-field">
        </div>
        <textarea name="message" aria-label="message" placeholder="Your message...*" required class="input-field"></textarea>

        

        <section class="section plans" id="plans" aria-label="plans">
          <div class="container">
            <h2 class="h2 section-title">Our Advertisement Plans</h2>
            <p class="section-text">
              Explore our advertisement plans tailored to meet your marketing needs.
            </p>
            <ul class="grid-list">
              <li>
                <div class="plan-card basic">
                  <div class="card-content">
                    <p class="card-subtitle">Basic Plan</p>
                    <h3 class="h3">
                      <a href="#" class="card-title">$100/month</a>
                    </h3>
                    <p class="card-description">The Basic Plan offers essential advertising features to get started.</p>
                    <a href="#" class="btn btn-primary" onclick="selectPlan(this)">Select</a>
                  </div>
                </div>
              </li>
              <li>
                <div class="plan-card standard">
                  <div class="card-content">
                    <p class="card-subtitle">Standard Plan</p>
                    <h3 class="h3">
                      <a href="#" class="card-title">$200/month</a>
                    </h3>
                    <p class="card-description">Upgrade to the Standard Plan for enhanced advertising capabilities.</p>
                    <a href="#" class="btn btn-primary" onclick="selectPlan(this)">Select</a>
                  </div>
                </div>
              </li>
              <li>
                <div class="plan-card premium">
                  <div class="card-content">
                    <p class="card-subtitle">Premium Plan</p>
                    <h3 class="h3">
                      <a href="#" class="card-title">$300/month</a>
                    </h3>
                    <p class="card-description">Unlock premium advertising features with the Premium Plan for maximum reach and impact.</p>
                    <a href="#" class="btn btn-primary" onclick="selectPlan(this)">Select</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <!-- Submit Button -->
        <div style="text-align: center"> <!-- Using inline style to center align -->
          <input type="submit" class="btn btn-primary" value="Confirm">
        </div>
      </form>

      <!-- Contact Information -->
      <ul class="contact-list">
        <li class="contact-item">
          <div class="contact-card">
            <div class="card-icon">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
            </div>
            <div class="card-content">
              <h3 class="h3 card-title">Mail Here</h3>
              <a href="mailto:hello@luaz.com" class="card-link">hello@luaz.com</a>
              <a href="mailto:info@luaz.com" class="card-link">info@luaz.com</a>
            </div>
          </div>
        </li>
        <li class="contact-item">
          <div class="contact-card">
            <div class="card-icon">
              <ion-icon name="map-outline" aria-hidden="true"></ion-icon>
            </div>
            <div class="card-content">
              <h3 class="h3 card-title">Visit Here</h3>
              <address class="card-address">
                27 Division St, New York,<br>
                NY 10002, USA
              </address>
            </div>
          </div>
        </li>
        <li class="contact-item">
          <div class="contact-card">
            <div class="card-icon">
              <ion-icon name="headset-outline" aria-hidden="true"></ion-icon>
            </div>
            <div class="card-content">
              <h3 class="h3 card-title">Call Here</h3>
              <a href="tel:+1234567890" class="card-link">+123 456 7890</a>
              <a href="tel:+2414524526" class="card-link">+241 452 4526</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- Back to Top Button -->
  <a href="#top" aria-label="back to top" data-back-top-btn class="back-top-btn">
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

  <!-- Custom JavaScript -->
  <script>
    function selectPlan(button) {
      var planCards = document.querySelectorAll('.plan-card');
      var buttons = document.querySelectorAll('.plan-card .btn');
  
      // Reset all buttons and remove 'selected' class from plan cards
      buttons.forEach(btn => {
        btn.textContent = "Select";
        btn.classList.remove('selected');
      });
  
      planCards.forEach(card => {
        card.classList.remove('selected');
      });
  
      // Set the clicked button as selected
      button.textContent = "Selected";
      button.classList.add('selected');
      button.closest('.plan-card').classList.add('selected');
    }
  </script>
</body>

</html>
