<?php
  require "header.php";
?>
<title>Downloads</title>
<main>

    <body>
        <br />
        <br />
        <div class="container">
            <?php
        if (isset($_SESSION['usersId'])) {
            echo '<div class="media border p-3 media-body">
            <h1>Your Username: ' .$_SESSION['usersUsername'].'</h1>'. '
            <h1>Your E-Mail: '. $_SESSION['emailUsers'] .'</h1>
        </div>';
        }
        else {
         echo '<h1 class="text-danger" style="text-align: center;">You are not logged in!<br />Please <a href="login.php">log in</a> to view your profile.</h1>';
         }
        ?>
        </div>
    </body>
</main>