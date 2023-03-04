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

    if ($_POST['title']) {
      $imageName = "";
      if($_FILES['image']['name'] != "") {
        $uploaddir = $_SERVER['DOCUMENT_ROOT']. '/upload/';
        $imageName = generateRandomString() . time() . "." . pathinfo($_FILES['image']['name'])['extension'];
        $uploadfile = $uploaddir . $imageName; 

        if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
            echo "Возможная атака с помощью файловой загрузки!\n";
            var_dump($_FILES);
            die();
        }
    }


      $sql = "INSERT INTO `tours` (`title`, `stars`, descrip, price, image) VALUES ('" . $_POST['title'] . "', '" . $_POST['stars'] . "', '" . $_POST['descrip'] . "', '" . $_POST['price'] . "', '" . $imageName ."');";
      if (mysqli_query($conn, $sql)) {
        header("Location: /admin/posts.php");
      } else {
          echo "Ошибка ввода данных: " . $sql . "<br>" . mysqli_error($conn);
      }
    }
    

    


?>

<!-- Форма для ввода данных -->
<form enctype="multipart/form-data"  method="POST" name="add">
  <div class="mb-3">
    <label for="title" class="form-label">Назва туру</label>
    <input type="text" class="form-control" id="title" name="title" value="" required>
  </div>

  <div class="mb-3">
    <label for="stars" class="form-label">Кількість зірок</label>
    <input type="number" class="form-control" id="stars" name="stars" value="" required>
  </div>

  <div class="mb-3">
    <label for="price" class="form-label">Ціна</label>
    <input type="number" class="form-control" id="price" name="price" value="" required>
  </div>

  <div class="mb-3">
    <label for="descrip" class="form-label">Опис туру</label>
    <textarea name="descrip" id="descrip" cols="30" rows="10" class="form-control" required></textarea>
  </div>

  <div class="mb-3">
    <label for="image" class="form-label"></label>
    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
    <input type="file" class="form-control" id="image" name="image" >
  </div>

  <button type="submit" class="btn btn-success"><i class="far fa-save"></i> Save</button>
</form>



<?php
include "partials/footer.php";
?>