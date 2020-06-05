<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="Test doang.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link href="Styles/css/bootstrap.css" rel=stylesheet type="text/css">
    <link href="Styles/css/bootstrap-grid.css.map" rel=stylesheet type="text/css">
    <link href="Styles/css/bootstrap-grid.min.css" rel=stylesheet type="text/css">
    <link href="Styles/css/bootstrap-grid.min.css.map" rel=stylesheet type="text/css">
    <link href="Styles/css/bootstrap-reboot.css" rel=stylesheet type="text/css">
    <link href="Styles/css/bootstrap-reboot.css.map" rel=stylesheet type="text/css">
    <link href="Styles/css/bootstrap-reboot.min.css" rel=stylesheet type="text/css">
    <link href="Styles/css/bootstrap-reboot.min.css.map" rel=stylesheet type="text/css">
    <link href="Styles/css/bootstrap.css.map" rel=stylesheet type="text/css">
    <link href="Styles/css/bootstrap.min.css" rel=stylesheet type="text/css">
    <link href="Styles/css/bootstrap.min.css.map" rel=stylesheet type="text/css">
    <link href="Styles/css/bootstrap-grid.css" rel=stylesheet type="text/css">
    <title>TemanAngel</title>
</head>

<body>

    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="downloads.php">Downloads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chat.php">Chat Software</a>
                    </li>
                    <!--li class="nav-item">
                    <a class="nav-link" href="khususdini.php">Khusus Amelia</a>
                    </li-->
                    <li class="nav-item">
                        <?php
                  if (isset($_SESSION['usersId'])) {
                      echo '<a href="profile.php" class="nav-link text-uppercase">Welcome, ' . $_SESSION['usersUsername'] . '</a>';
                  }
                  else {
                      echo '<a class="nav-link" href="signup.php">Signup</a>';
                  }
                  ?>
                    </li>
                </ul>
            <?php
            if(isset($_SESSION['usersId'])) {
                echo '<div style="margin-left: 53%">
                <ul class="nav navbar-nav navbar-right">
                  <form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="POST">
                    <button class="btn my-2 my-sm-0 btn-danger" type="submit" name="logout-submit">Logout</button>
                  </form>
                </ul>
              ';
            }
            else {
                echo '<div style="margin-left:32%">
                <ul class="nav navbar-nav navbar-right">
                  <form autocomplete="new-password" class="form-inline navbar-right my-2 my-lg-0" action="includes/login.inc.php" method="POST">
                    <input class="form-control mr-sm-2" type="text" name="usernamemail" placeholder="Username...">
                    <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password...">
                    <button class="btn btn-success my-2 my-sm-0" type="submit" name="login-submit">Login</button>
                  </form>
              </ul>
                ';
            }
          ?>
    </div>    
    </nav>



</body>

</html>