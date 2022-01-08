<header>
  <h1>Zozor</h1>
  <h2>Carnets de voyage</h2>
  <?php 
    session_start();
    if (isset($_SESSION['connect'])) {
      echo "your username is : ".$_SESSION['username'];
      echo "<a href='backend/logout-handler.php'>Deconnexion</a>";
    }
  ?>
</header>