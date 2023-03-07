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
      $sql = "UPDATE `users` SET `username` = '" . $_POST['name'] . "', `email` = '" . $_POST['email'] . "' WHERE `users`.`id` = " . $_GET['id'] . ";";
      if (mysqli_query($conn, $sql)) {
        header("Location: /admin/users.php");
      } else {
          echo "Ошибка изминения данных: " . $sql . "<br>" . mysqli_error($conn);
      }
  }








    $sql = "SELECT * FROM `users` WHERE id = " . $_GET['id'];
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
?>

<!-- Форма для ввода данных -->
<form action="#?id=<?php echo $row['id']; ?>"  method="POST">
  <div class="mb-3">
    <label for="Username" class="form-label">Username</label>
    <input type="text" class="form-control" id="Username" name="name" value="<?php echo $row['username']?>" required>
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input type="email" class="form-control" id="Email" name="email" value="<?php echo $row['email']?>" required>
  </div>
  <button type="submit" class="btn btn-success"><i class="far fa-save"></i> Save</button>
</form>



<?php
include "partials/footer.php";
?>