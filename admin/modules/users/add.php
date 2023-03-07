<?php
    require($_SERVER['DOCUMENT_ROOT']. '/configs/db.php');
    require($_SERVER['DOCUMENT_ROOT']. '/configs/helpers.php');
    session_start();
    if (isset($_SESSION['user_id']) || $_COOKIE['user_id']) {
        if (isset($_SESSION['user_id'])) {
            $sql = "SELECT * FROM users WHERE id = " . $_SESSION['user_id'];
        } elseif (isset($_COOKIE['user_id'])) {
            $sql = "SELECT * FROM users WHERE id = " . $_COOKIE['user_id'];
        }
        $result = mysqli_query($conn, $sql);
        $user = $result->fetch_assoc();
        // var_dump($user);
        if($user['role'] != "admin") {
            header("Location: /register.php");
        }
    } else {
        header("Location: /register.php");
    }

    if (isset($_POST['email'])) {
      $sql = "INSERT INTO `users` (`username`, `email`, `password`, `role`) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "', '". $_POST['role'] . "');";
          if (mysqli_query($conn, $sql)) {
            header("Location: /admin/users.php");
          } else {
              echo "Ошибка ввода данных: " . $sql . "<br>" . mysqli_error($conn);
          }
  }





?>

<!-- Форма для ввода данных -->
<form action="#"  method="POST">
  <div class="mb-3">
    <label for="Username" class="form-label">Username</label>
    <input type="text" class="form-control" id="Username" name="name" value="" required>
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input type="email" class="form-control" id="Email" name="email" value="" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="" required>
  </div>
  <div class="mb-3">
    <label for="role" class="form-label">Role</label>
    <input type="text" class="form-control" id="role" name="role" value="" required>
  </div>
  <button type="submit" class="btn btn-success"><i class="far fa-save"></i> Save</button>
</form>



<?php
include "partials/footer.php";
?>