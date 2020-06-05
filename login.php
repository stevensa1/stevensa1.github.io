<?php
  require "header.php";
?>
<div class="container-fluid">
    <h1>Login</h1>
    <form action="includes/login.inc.php" method="POST">
        <div class="form-group">
            <label for="user/email">Username or E-mail</label>
            <input class="form-control" id="user/email" type="text" name="usernamemail" placeholder="Username...">
            <small id="infologinuser" class="form-text text-muted">We'll never share your email with anyone
                else.</small>
        </div>
        <div class="form-group">
            <label for="pwd">Password</label>
            <input id="pwd" class="form-control" type="password" name="pwd" placeholder="Password...">
        </div>
        <button class="btn btn-success my-2 my-sm-0" type="submit" name="login-submit">Login</button>
    </form>
    <br />
    <h3>Don't have account? <a href="signup.php">Sign up here!</a></h3>
</div>

<?php
  require "footer.php";
?>