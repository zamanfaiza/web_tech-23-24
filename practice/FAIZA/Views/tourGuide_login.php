
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width= device-widht, initial-scale=1.0" />
    <link rel="stylesheet" href="template.css" />
    <link rel="stylesheet" href="tourGuide_login.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
  </head>
  <body>
    <div class="login-box">
        <form method="post" action="../Controllers/authController.php">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text"  name="id" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="pass" placeholder="Password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="pass_reset.php">Forgot password?</a>
            </div>
            <button type="submit" class="log_btn">Login</button>
            <!-- <div class="register-link"> -->
                <!-- <p>Don't have an account? <a href="#">Register</a></p> -->
            <!-- </div> -->
      </form>
    </div>
    


  </body>
</html>
