<?php
  include 'php/includes/session.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>SignIn / SignUp</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>
  <body>
    <nav class="nav-extended light-blue lighten-1">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">Logo</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li>Welcome <?php echo $_SESSION['login_user'];?></li>
          <li><a href="php/logout.php">Logout</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li>Welcome <?php echo $_SESSION['login_user'];?></li>
          <li><a href="php/logout.php">Logout</a></li>
        </ul>
      </div>
      <div class="nav-content container">
        <ul class="tabs tabs-transparent">
          <li class="tab"><a href="#create">Create</a></li>
          <li class="tab"><a href="#search">Search</a></li>
          <li class="tab"><a href="#settings">Settings</a></li>
        </ul>
      </div>
    </nav>

    <div class="row">
      <div class="col s2"></div>
      <div id="create" class="col s8">Test 1</div>
      <div id="search" class="col s8">Test 2</div>
      <div id="settings" class="col s8">Test 3</div>
    </div>
    <!-- Footer -->
    <footer class="page-footer orange">
      <div class="footer-copyright">
        <div class="container">
        Made by <a class="orange-text text-lighten-3" href="">Materialize</a>
        </div>
      </div>
    </footer>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
  </body>
</html>
