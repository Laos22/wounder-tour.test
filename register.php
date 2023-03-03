<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Wounder Tour Register</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="css/reg.css">
    
  </head>
  <body>






    <?php


    require($_SERVER['DOCUMENT_ROOT']. '/configs/db.php');
    if (!isset($_SESSION)) session_start();
    require($_SERVER['DOCUMENT_ROOT']. '/configs/helpers.php');
    $user = getCurrentUser();

    if (!empty($_POST)) {
      var_dump($_POST);
      echo "<br>";
      if (isset($_POST['email_log'])) {
        $sql = "SELECT * FROM `users` WHERE `email` = '" . $_POST['email_log'] . "' AND `password` = '" . $_POST['password_log'] . "'";
        $result = mysqli_query($conn, $sql);
        $user = $result->fetch_assoc();

        if ($user) {
          if (isset($_POST['remember']) ) {
            setcookie('user_id', $user['id'], time() + 60 * 60 * 24 * 30, '/');
          } else {
            $_SESSION['user_id'] = $user['id'];
          }
          var_dump($_SESSION);
          header("Location: /");
        } else {
          var_dump("Нет такого пользователя с таким паролем!");
            $_SESSION['user_id'] = null;
            setcookie('user_id', '', 0, '/');
        }
      }

      if (isset($_POST['email_reg'])) {
        var_dump("REGISTRATION");
        $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('" . $_POST['username'] . "', '" . $_POST['email_reg'] . "', '" . $_POST['password_reg'] . "');";
        if (mysqli_query($conn, $sql)) {
            echo "INSERT";
            $sql = "SELECT * FROM `users` WHERE `email` = '" . $_POST['email_reg'] . "' AND `password` = '" . $_POST['password_reg'] . "'";
            $result = mysqli_query($conn, $sql);
            $user = $result->fetch_assoc();
            if (isset($_POST['remember']) ) {
              setcookie('user_id', $user['id'], time() + 60 * 60 * 24 * 30, '/');
            } else {
              $_SESSION['user_id'] = $user['id'];
            }
            header("Location: /");
        } else {
            echo "Error: " . $sql . " <br> " . mysqli_error($conn);
        }
        mysqli_close($conn);
      }
    }
    ?>

    <div class="conteiner" style="height: 100%;">  
    <a href="/" class="btn_exit">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-x-square-fill" viewBox="0 0 16 16">
        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
      </svg>          
    </a>
    <section class="forms-section">
      <h1 class="section-title">Авторизація</h1>
      <div class="forms">
        <div class="form-wrapper is-active">
          <button type="button" class="switcher switcher-login">
            Вхід
            <span class="underline"></span>
          </button>
          <form class="form form-login" action="#" method="POST">
            <fieldset>
              <legend>Please, enter your email and password for login.</legend>
              <div class="input-block">
                <label for="login-email">E-mail</label>
                <input id="login-email" type="email" name="email_log" required>
              </div>
              <div class="input-block">
                <label for="login-password">Пароль</label>
                <input id="login-password" type="password" name="password_log" required>
              </div>
              <div class="remember">
                <label for="login-remember">
                  <input id="login-remember" type="checkbox" name="remember" value="1">
                  Запамʼятати мене
                </label>
              </div>
            </fieldset>
            <button type="submit" class="btn-login">Вхід</button>
          </form>
        </div>

        <div class="form-wrapper">
          <button type="button" class="switcher switcher-signup">
            Реєстрація
            <span class="underline"></span>
          </button>
          <form class="form form-signup" action="#" method="POST">
            <fieldset>
              <legend>Please, enter your email, password and password confirmation for sign up.</legend>
              <div class="input-block">
                <label for="signup-name">Імʼя</label>
                <input id="signup-name" type="text" name="username" required>
              </div>
              <div class="input-block">
                <label for="signup-email">E-mail</label>
                <input id="signup-email" type="email" name="email_reg" required>
              </div>
              <div class="input-block">
                <label for="signup-password">Пароль</label>
                <input id="signup-password" type="password" name="password_reg" required>
              </div>
              <div class="remember">
                <label for="login-remember">
                  <input id="login-remember" type="checkbox" name="remember" value="1">
                  Запамʼятати мене
                </label>
              </div>
              <!-- <div class="input-block">
                <label for="signup-password-confirm">Confirm password</label>
                <input id="signup-password-confirm" type="password" >
              </div> -->
            </fieldset>
            <button type="submit" class="btn-signup">Продовжити</button>
          </form>
        </div>

      </div>
    </section>
    </div>
    <script src="js/reg.js"></script>
  </body>
  </html>