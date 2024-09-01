<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketing C-16 - We're available for marketing</title>

  <script>
    function scrollToContact() {
      // Scroll to the "Let's Contact With Us" section
      document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
    }
  </script>
  

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
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">
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
            <a href="#home" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li>
            <a href="#service" class="navbar-link" data-nav-link>Services</a>
          </li>

          <li>
            <a href="#project" class="navbar-link" data-nav-link>Project</a>
          </li>

          <li>
            <a href="#about" class="navbar-link" data-nav-link>About Us</a>
          </li>

          <li>
            <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
          </li>

          <li>
            <a href="#contact" class="navbar-link" data-nav-link>Contact Us</a>
          </li>

          <li>
            <a href="#" class="btn btn-primary" onclick="scrollToContact()">Get Started</a>

          </li>

        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" aria-label="hero">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Marketing C-16 Marketing Agency</p>

            <h1 class="h1 hero-title">We are available for marketing</h1>

            <p class="hero-text">
              We craft compelling marketing strategies to elevate your brand and drive growth.
            </p>

            <a href="#" class="btn btn-primary" onclick="scrollToContact()">Get Started</a>


          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="720" height="673" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="service" aria-label="service">
        <div class="container">

          <h2 class="h2 section-title">Services We Provided</h2>

          <p class="section-text">
            Partner with us to access top-notch SEO, digital marketing, and market research services.
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <div class="card-icon" style="background-color: #13c4a1">
                  <ion-icon name="chatbox"></ion-icon>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">SEO Optimization</a>
                </h3>

                <p class="card-text">
                  Sed ut perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudantium, totam rem
                  aperiam, eaque
                  ipsa quae.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon" style="background-color: #6610f2">
                  <ion-icon name="desktop"></ion-icon>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Digital Marketing</a>
                </h3>

                <p class="card-text">
                  Elevate your brand's online visibility and drive targeted traffic with our comprehensive digital marketing strategies.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon" style="background-color: #ffb700">
                  <ion-icon name="bulb"></ion-icon>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Market Research</a>
                </h3>

                <p class="card-text">
                  Unlock valuable insights and stay ahead of the competition with our thorough market research solutions.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon" style="background-color: #fc3549">
                  <ion-icon name="phone-portrait"></ion-icon>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Keyword Targeting</a>
                </h3>

                <p class="card-text">
                  Reach your target audience effectively by utilizing our precision-focused keyword targeting strategies.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon" style="background-color: #00d280">
                  <ion-icon name="archive"></ion-icon>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Email Marketing</a>
                </h3>

                <p class="card-text">
                  Engage and nurture your audience with personalized and impactful email marketing campaigns tailored to your brand's needs and goals.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon" style="background-color: #ff612f">
                  <ion-icon name="build"></ion-icon>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Marketing & Reporting</a>
                </h3>

                <p class="card-text">
                  Drive your business forward with comprehensive marketing strategies and detailed reporting, ensuring maximum effectiveness and informed decision-making.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #PROJECT
      -->

      <section class="section project" id="project" aria-label="project">
        <div class="container">

          <h2 class="h2 section-title">Our Recent Projects</h2>

          <p class="section-text">
            Explore our recent projects showcasing innovative solutions and creative endeavors.
          </p>

          <ul class="grid-list">

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 510; --height: 700;">
                  <img src="./assets/images/project-1.jpg" width="510" height="700" loading="lazy"
                    alt="Designing a better cinema experience" class="img-cover">
                </figure>

                <div class="card-content">

                  <p class="card-subtitle">SEO Optimization</p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Designing a better cinema experience</a>
                  </h3>

                  <a href="#" class="btn btn-primary">View Details</a>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 510; --height: 700;">
                  <img src="./assets/images/project-2.jpg" width="510" height="700" loading="lazy"
                    alt="Building design process within teams" class="img-cover">
                </figure>

                <div class="card-content">

                  <p class="card-subtitle">Digital Marketing</p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Building design process within teams</a>
                  </h3>

                  <a href="#" class="btn btn-primary">View Details</a>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 510; --height: 700;">
                  <img src="./assets/images/project-3.jpg" width="510" height="700" loading="lazy"
                    alt="How intercom brings play into their design process" class="img-cover">
                </figure>

                <div class="card-content">

                  <p class="card-subtitle">Keyword Targeting</p>

                  <h3 class="h3">
                    <a href="#" class="card-title">How intercom brings play into their design process</a>
                  </h3>

                  <a href="#" class="btn btn-primary">View Details</a>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 510; --height: 700;">
                  <img src="./assets/images/project-4.jpg" width="510" height="700" loading="lazy"
                    alt="Stuck with to-do list, I created a new app for" class="img-cover">
                </figure>

                <div class="card-content">

                  <p class="card-subtitle">Email Marketing</p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Stuck with to-do list, I created a new app for</a>
                  </h3>

                  <a href="#" class="btn btn-primary">View Details</a>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 510; --height: 700;">
                  <img src="./assets/images/project-5.jpg" width="510" height="700" loading="lazy"
                    alt="Examples of different types of sprints" class="img-cover">
                </figure>

                <div class="card-content">

                  <p class="card-subtitle">Marketing & Reporting</p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Examples of different types of sprints</a>
                  </h3>

                  <a href="#" class="btn btn-primary">View Details</a>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 510; --height: 700;">
                  <img src="./assets/images/project-6.jpg" width="510" height="700" loading="lazy"
                    alt="Redesigning the New York times app" class="img-cover">
                </figure>

                <div class="card-content">

                  <p class="card-subtitle">Development</p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Redesigning the New York times app</a>
                  </h3>

                  <a href="#" class="btn btn-primary">View Details</a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <div class="about-banner img-holder" style="--width: 720; --height: 960;">
            <img src="./assets/images/about-banner.jpg" width="720" height="960" loading="lazy" alt="about banner"
              class="img-cover">

            <button class="play-btn" aria-label="Play video">
              <ion-icon name="play" aria-hidden="true"></ion-icon>
            </button>
          </div>

          <div class="about-content">

            <h2 class="h2 section-title">About Us</h2>

            <p class="section-text">
              Discover more about our mission-driven approach and commitment to excellence in every project.
            </p>

            <h3 class="h3">Who We Are</h3>

            <p class="section-text">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
              rem aperiam,
              eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            </p>

            <h3 class="h3">Our Success</h3>

            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                <p class="section-text">
                  Our commitment to quality and precision sets us apart in the industry.
                </p>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                <p class="section-text">
                  It is a long established fact that a reader will be distracted by the readable content of a page when
                  looking at its
                  layout.
                </p>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                <p class="section-text">
                  Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                  classical Latin
                  literature.
                </p>
              </li>

            </ul>

            <h3 class="h3">Our Mission</h3>

            <p class="section-text">
              Our mission is to empower businesses by providing innovative solutions that enhance their online presence and drive growth. We strive to deliver exceptional results by leveraging cutting-edge technologies and tailored strategies. Through our dedication and expertise, we aim to exceed our clients' expectations and establish long-lasting partnerships built on trust and mutual success.
            </p>
            </p>

          </div>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="section cta" aria-label="cta" style="background-image: url('./assets/images/cta-bg.jpg')">
        <div class="container">

          <p class="cta-subtitle">So What is Next?</p>

          <h2 class="h2 section-title">Are You Ready? Let's get to Work!</h2>

          <a href="#" class="btn btn-secondary">Get Started</a>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <h2 class="h2 section-title">Latest Articles Updated Weekly</h2>

          <p class="section-text">
            Stay informed with our latest insights and updates on industry trends, best practices, and innovative strategies.
          </p>

          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 860; --height: 646;">
                  <img src="./assets/images/blog-1.jpg" width="860" height="646" loading="lazy"
                    alt="How to Become a Successful Entry Level UX Designer" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="time" datetime="2022-06-16">June 16, 2022</time>

                  <h3 class="h3">
                    <a href="#" class="card-title">How to Become a Successful Entry Level UX Designer</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card grid">

                <figure class="card-banner img-holder" style="--width: 860; --height: 646;">
                  <img src="./assets/images/blog-2.jpg" width="860" height="646" loading="lazy"
                    alt="2022 Local SEO Success: The Year of Everywhere" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="time" datetime="2022-06-16">June 16, 2022</time>

                  <h3 class="h3">
                    <a href="#" class="card-title">2022 Local SEO Success: The Year of Everywhere</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card grid">

                <figure class="card-banner img-holder" style="--width: 860; --height: 646;">
                  <img src="./assets/images/blog-3.jpg" width="860" height="646" loading="lazy"
                    alt="The Guide to Running a Client Discovery Process" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="time" datetime="2022-06-16">June 16, 2022</time>

                  <h3 class="h3">
                    <a href="#" class="card-title">The Guide to Running a Client Discovery Process</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card grid">

                <figure class="card-banner img-holder" style="--width: 860; --height: 646;">
                  <img src="./assets/images/blog-4.jpg" width="860" height="646" loading="lazy"
                    alt="3 Ways to Get Client Approval for Scope Changes" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="time" datetime="2022-06-16">June 16, 2022</time>

                  <h3 class="h3">
                    <a href="#" class="card-title">3 Ways to Get Client Approval for Scope Changes</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card grid">

                <figure class="card-banner img-holder" style="--width: 860; --height: 646;">
                  <img src="./assets/images/blog-5.jpg" width="860" height="646" loading="lazy"
                    alt="Top 21 Must-Read Blogs For Creative Agencies" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="time" datetime="2022-06-16">June 16, 2022</time>

                  <h3 class="h3">
                    <a href="#" class="card-title">Top 21 Must-Read Blogs For Creative Agencies</a>
                  </h3>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

      

    



      <section class="section contact" id="contact" aria-label="contact">
        <div class="container">
    
          <div class="auth-content">
            <h2 class="h2 section-title">Let's Contact With Us</h2>
            <h3 class="h3 section-title">Register or Log In</h3>
            <p class="section-text">
              Sign up or log in to access exclusive content and personalized services.
            </p>
            <div class="auth-form">
              <!-- Registration Form -->
              <div class="auth-card register">
                <div class="card-content">
                  <p class="card-subtitle">Register</p>
                  
                  <h3 class="h3">
                    <a href="#" class="card-title">Sign Up</a>
                  </h3>
                  <p class="card-description">Create an account to access exclusive features.</p>
                  <a href="register.php" class="btn btn-primary">Register Now</a>
                  
                </div>
              </div>
              <!-- Login Form -->
              <div class="auth-card login">
                <div class="card-content">
                  <p class="card-subtitle">Login</p>
                  <h3 class="h3">
                    <a href="#" class="card-title">Sign In</a>
                  </h3>
                  <p class="card-description">Already have an account? Sign in here.</p>
                  <a href="login.php" class="btn btn-primary">Login Now</a>
                </div>
              </div>
            </div>
          </div>
    
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

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <!-- <footer class="footer">
    <div class="container">

      <p class="copyright">
        &copy; 2022 All Rights Reserved by <a href="#" class="copyright-link">codewithsadee</a>
      </p>

    </div>
  </footer>  -->





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

</body>

</html>