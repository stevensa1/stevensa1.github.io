<?php
  require "header.php";
?>

<!-- main>
    <div class="container-fluid">

        <h1>Signup</h1>
        <h2 class="text-danger warning">PENDAFTARAN AKAN DITUTUP HARI KAMIS (16 Mei 2019)</h2>
        <?php
          if (isset($_GET['error'])) {
              if ($_GET['error'] == "emptyfields") {
                  echo '<p>Fill in all fields!</p>';
              }
          }
        ?>
        <form action="includes/signup.inc.php" method="post">
            <div class="form-group">
                <label for="Username">Pick an username</label>
                <input class="form-control" type="text" id="Username" name="username" placeholder="Username">
                <small class="form-text text-muted">Pick an unique username, eg. kemem0402</small>
            </div>
            <div class="form-group">
                <label for="emailreg">E-Mail Address</label>
                <input class="form-control" type="text" id="emailreg" name="mail" placeholder="E-mail">
                <small class="form-text text-muted">We'll never share your e-mail to anyone else.</small>
            </div>
            <div class="form-group">
                <label for="pwd">Passwords</label>
                <input class="form-control" type="password" id="pwd" name="pwd" placeholder="Password">
                <input class="form-control" type="password" id="pwd" name="pwd-repeat" placeholder="Confirm Password">
                <small class="form-text text-muted">The password is encrypted with the latest encryption pattern. Thats mean WE will never steal your password. If you need more proof, just ask the creator.</small>
            </div>
            <button class="btn btn-success" type="submit" name="signup-submit">Signup</button>
        </form>
</main -->
        <main>

            <body>
                <br />
                <br />

                <div class="container">
                    <div class="alert alert-danger">
                        <strong>Access Blocked!</strong> The registration has been closed, please contact administrator.</div><small>Error code: 0022_NOREG</small>
                </div>
            </body>
        </main>
