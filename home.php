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
          <li class="tab"><a href="#project">Create Project</a></li>
          <li class="tab"><a href="#team">Create Team</a></li>
          <li class="tab"><a href="#search">Search</a></li>
          <li class="tab"><a href="#settings">Settings</a></li>
        </ul>
      </div>
    </nav>

    <div class="row">
      <div class="col s2"></div>

      <!-- Create Project-->
      <div id="project" class="col s8">
        <form method="post" action="php/createProj.php">
          <table class="bordered">
            <thead>
              <th><h4>Create a Project</h4></th>  
            </thead>
            <tbody>
              <tr>
                <td>Project Title</td>
                <td>
                  <div class="input-field col s12">
                    <input id="title" name="title" type="text" required="" aria-required="true" class="validate" autofocus>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Team Name</td>
                <td>
                  <div class="input-field col s12">
                    <input id="team_name" name="team_name" type="text" required="" aria-required="true" class="validate">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Department</td>
                <td>
                  <div class="input-field col s12">
                    <input id="department" name="department" type="text" required="" aria-required="true" class="validate">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Academic Year</td>
                <td>
                  <div class="input-field col s12">
                    <input id="year" name="year" type="number" required="" aria-required="true" class="validate">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Description</td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="description" name="description" class="materialize-textarea"></textarea>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Project Coordinator</td>
                <td>
                  <div class="input-field col s12">
                    <input id="coordinator" name="coordinator" type="text" required="" aria-required="true" class="validate">
                  </div>
                </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <div class="input-field col s7">
                      <button class="btn waves-effect waves-light" type="submit" name="action">Create Project
                      <i class="material-icons right">done</i>
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
      <div id="team" class="col s8">
        <form method="post" action="php/createTeam.php">
          <table class="bordered">
            <thead>
              <th><h4>Create a Team</h4></th>  
            </thead>
            <tbody>
              <tr>
                <td>Team Name</td>
                <td>
                  <div class="input-field col s12">
                    <input id="tn" name="tn" type="text" required="" aria-required="true" class="validate" autofocus>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Team Leader</td>
                <td>
                  <div class="input-field col s12">
                    <input id="tl" name="tl" type="text" required="" aria-required="true" class="validate">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Team Member 1</td>
                <td>
                  <div class="input-field col s12">
                    <input id="tm1" name="tm1" type="text" required="" aria-required="true" class="validate">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Team Member 2</td>
                <td>
                  <div class="input-field col s12">
                    <input id="tm2" name="tm2" type="text" required="" aria-required="true" class="validate">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Team Member 3</td>
                <td>
                  <div class="input-field col s12">
                    <input id="tm3" name="tm3" type="text" required="" aria-required="true" class="validate">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Project Coordinator</td>
                <td>
                  <div class="input-field col s12">
                    <input id="coordinator" name="coordinator" type="text" required="" aria-required="true" class="validate">
                  </div>
                </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <div class="input-field col s7">
                      <button class="btn waves-effect waves-light" type="submit" name="action">Create Team
                      <i class="material-icons right">done</i>
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
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
