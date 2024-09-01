<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Marketing Firm Dashboard</title>

  <!-- Montserrat Font -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/cl_styles.css">
</head>
<body>
  <div class="grid-container">

    <!-- Header -->
    <header class="header">
      <div class="menu-icon" onclick="openSidebar()">
        <span class="material-icons-outlined">menu</span>
      </div>
      <div class="header-left">
        <span class="material-icons-outlined">search</span>
      </div>
      <div class="header-right">
        <span class="material-icons-outlined">notifications</span>
        <span class="material-icons-outlined">email</span>
        <span class="material-icons-outlined">account_circle</span>
      </div>
    </header>
    <!-- End Header -->

    <!-- Sidebar -->
    <aside id="sidebar">
      <div class="sidebar-title">
        <div class="sidebar-brand">
          <span class="material-icons-outlined">inventory</span> Marketing Firm Dashboard
        </div>
        <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
      </div>

      <ul class="sidebar-list">
        <li class="sidebar-list-item">
          <a href="#" target="_blank">
            <span class="material-icons-outlined">dashboard</span> Dashboard
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="cl_assgned.php" target="_blank">
            <span class="material-icons-outlined">assignment</span> Client assigned
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="#" target="_blank">
            <span class="material-icons-outlined">campaign</span> Campaigns
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="#" target="_blank">
            <span class="material-icons-outlined">bar_chart</span> Analytics
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="#" target="_blank">
            <span class="material-icons-outlined">message</span> Messages
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="#" target="_blank">
            <span class="material-icons-outlined">settings</span> Settings
          </a>
        </li>
      </ul>
    </aside>
    <!-- End Sidebar -->

    <!-- Main -->
    <main class="main-container">
      <div class="main-title">
        <p class="font-weight-bold">MARKETING FIRM DASHBOARD</p>
      </div>

      <div class="main-cards">
        <div class="card">
          <div class="card-inner">
            <p class="text-primary">TASKS</p>
            <span class="material-icons-outlined text-blue">assignment</span>
          </div>
          <span class="text-primary font-weight-bold">16</span>
        </div>

        <div class="card">
          <div class="card-inner">
            <p class="text-primary">CAMPAIGNS</p>
            <span class="material-icons-outlined text-orange">campaign</span>
          </div>
          <span class="text-primary font-weight-bold">8</span>
        </div>

        <div class="card">
          <div class="card-inner">
            <p class="text-primary">ANALYTICS</p>
            <span class="material-icons-outlined text-green">bar_chart</span>
          </div>
          <span class="text-primary font-weight-bold">View</span>
        </div>

        <div class="card">
          <div class="card-inner">
            <p class="text-primary">MESSAGES</p>
            <span class="material-icons-outlined text-red">message</span>
          </div>
          <span class="text-primary font-weight-bold">5 New</span>
        </div>
      </div>
    </main>
    <!-- End Main -->

     
  <!-- Scripts -->
  <!-- Custom JS -->
  <script src="assets/js/cl-script.js"></script>
</body>
</html>
