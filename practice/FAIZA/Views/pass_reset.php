<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width= device-widht, initial-scale=1.0" />
    <link rel="stylesheet" href="tourGuide_login.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Reset Password</title>
  </head>
  <body>
    <div class="login-box">
        <form method="post" action="password_resetController.php">
            <h1>Verification</h1>
            <div class="input-box">
                <input type="email"  name="email" placeholder="Enter Email Address" required>
                <i class='bx bxl-gmail'></i>
            </div>
            <div class="input-box">
                <button type="submit" name="password_reset" class="btn-primary">Send Verification Code</button>
            </div>
      </form>
    </div>
    


  </body>
</html>