<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketing C-16 - Login</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">
      <a href="#" class="logo">Marketing C-16</a>
      <nav class="navbar container" data-navbar>
        <ul class="navbar-list">
          <li>
            <a href="index.php" class="navbar-link" data-nav-link>Home</a>
          </li>
          <li>
            <a href="index.php#service" class="navbar-link" data-nav-link>Services</a>
          </li>
          <li>
            <a href="index.php#project" class="navbar-link" data-nav-link>Project</a>
          </li>
          <li>
            <a href="index.php#about" class="navbar-link" data-nav-link>About Us</a>
          </li>
          <li>
            <a href="index.php#blog" class="navbar-link" data-nav-link>Blog</a>
          </li>
          <li>
            <a href="index.php#contact" class="navbar-link" data-nav-link>Contact Us</a>
          </li>
          <!-- Remove login button from header -->
        </ul>
      </nav>
      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>
    </div>
  </header>

  <!-- 
    - #LOGIN
  -->

  <div class="center-container">
    <div class="login-box">
      <section class="section login" id="login" aria-label="login">
        <div class="container">
          <h2 class="h2 section-title">Login</h2>
          <form id="loginForm" action="#" method="post" class="login-form">
            <div class="input-wrapper">
              <input type="email" name="email" aria-label="email" placeholder="Email address" required class="input-field">
            </div>
            <div class="input-wrapper">
              <input type="password" id="password" name="password" aria-label="password" placeholder="Password" required class="input-field">
            </div>
            <button type="submit" class="btn btn-primary">Login Now</button>
          </form>
        </div>
      </section>
    </div>
  </div>

  <!-- 
    - #FOOTER
  -->

  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" aria-label="back to top" data-back-top-btn class="back-top-btn">
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script>
    // Add event listener to form submission
    document.getElementById('loginForm').addEventListener('submit', function(event) {
      // Prevent form submission
      event.preventDefault();
      // Get password value
      var password = document.getElementById('password').value;
      // Check if password contains 'C' or 'c' (for client)
      if (password.includes('C') || password.includes('c')) {
        // Redirect to client dashboard
        window.location.href = 'cl_dash.php';
      } else if (password.includes('E') || password.includes('e')) {
        // Redirect to employee dashboard
        window.location.href = 'em_dash.php';
      } else {
        // Handle incorrect password
        alert('Invalid password');
      }
    });
  </script>

</body>
</html>
