<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Sign-up</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="css/style1.css" media="screen" type="text/css" />

</head>

<body>
<form action="signupphp.php" method="POST">
  <div class="login-card">
    <h1><strong><u>Sign-up</u></strong></h1><br>
  <form>
  <input type="text" name="fname" placeholder="First Name">
  <input type="text" name="lname" placeholder="Last Name">
  <input type="text" name="mob" placeholder="Mobile Number">
  <input type="text" name="email" placeholder="email">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="signup" class="login login-submit" value="Signup">
  </form>

  <div class="login-help">
    <a href="#">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>
</form>
</body>

</html>