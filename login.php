<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="fa">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- font -->
  <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css" rel="stylesheet" type="text/css" />
  <!-- styles -->
  <link rel="stylesheet" href="css/login.css" />
  <title>login</title>
</head>

<body>
  <div class="login-wrap">
    <div class="login-html">
      <input id="tab-1" type="radio" name="tab" class="sign-in" checked /><label for="tab-1" class="tab">ورود</label>
      <input id="tab-2" type="radio" name="tab" class="sign-up" /><label for="tab-2" class="tab">ثبت نام</label>
      <div class="login-form">
        <form action="login.php" method="POST" class="sign-in-htm">
          <?php include('errors.php'); ?>
          <div class="group">
            <label for="user_login" class="label">نام کاربری:</label>
            <input name="username" id="user_login" type="text" class="input" />
          </div>
          <div class="group">
            <label for="pass" class="label">رمزعبور:</label>
            <input name="password" id="pass" type="password" class="input" data-type="password" />
          </div>
          <div class="group">
            <button type="submit" class="button" name="login_user">ورود</button>
          </div>
        </form>
        <form action="login.php" method="POST" class="sign-up-htm">
          <?php include('errors.php'); ?>
          <div class="group">
            <label for="user" class="label">نام کاربری:</label>
            <input name="username" id="user" type="text" class="input" value="<?php echo $username; ?>" />
          </div>
          <div class="group">
            <label for="email" class="label">ایمیل:</label>
            <input name="email" id="email" type="email" class="input" value="<?php echo $email; ?>" />
          </div>
          <div class="group">
            <label for="pass1" class="label">رمزعبور:</label>
            <input name="password_1" id="pass1" type="password" class="input" data-type="password" />
          </div>
          <div class="group">
            <label for="pass2" class="label">تکرار رمزعبور:</label>
            <input name="password_2" id="pass2" type="password" class="input" data-type="password" />
          </div>
          <div class="group">
            <button type="submit" class="button" name="reg_user">ثبت نام</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>