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

    $sql3 = "SELECT * FROM `tours` WHERE id = " . $_GET['id'];
    $result3 = mysqli_query($conn, $sql3);
    $tour = $result3->fetch_assoc();


    if ($_POST['title']) {
      $imageName = "";
      $hot = (isset($_POST['hot']) ) ? 1 : 0 ;
      if($_FILES['image']['name'] != "") {
        $uploaddir = $_SERVER['DOCUMENT_ROOT']. '/upload/';
        $imageName = generateRandomString() . time() . "." . pathinfo($_FILES['image']['name'])['extension'];
        $uploadfile = $uploaddir . $imageName; 

        if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
            echo "Возможная атака с помощью файловой загрузки!\n";
            var_dump($_FILES);
            die();
        }
      $sql = "UPDATE `tours` SET `title` = '" . $_POST['title'] . "', `stars` = '" . $_POST['stars'] . "', `descrip` = '" . $_POST['descrip'] . "', `price` = '" . $_POST['price'] . "', `hot` = '" . $hot  . "', `image` = '" . $imageName . "' WHERE `id` = " . $_GET['id'] . ";";   
    } else {
      $sql = "UPDATE `tours` SET `title` = '" . $_POST['title'] . "', `stars` = '" . $_POST['stars'] . "', `descrip` = '" . $_POST['descrip'] . "', `price` = '" . $_POST['price'] . "', `hot` = '" . $hot . "' WHERE `id` = " . $_GET['id'] . ";";
    }

      if (mysqli_query($conn, $sql)) {
        header("Location: /admin/posts.php");
      } else {
          echo "Ошибка изминения данных: " . $sql . "<br>" . mysqli_error($conn);
      }

    }


?>





<!-- Форма для ввода данных -->
<form enctype="multipart/form-data" method="POST">
  <div class="mb-3">
    <label for="title" class="form-label">Назва туру</label>
    <input type="text" class="form-control" id="title" name="title" value="<?php echo $tour['title']?>" required>
  </div>

  <div class="mb-3">
    <label for="stars" class="form-label">Кількість зірок</label>
    <input type="number" class="form-control" id="stars" name="stars" value="<?php echo $tour['stars']?>" required>
  </div>

  <div class="mb-3">
    <label for="price" class="form-label">Ціна</label>
    <input type="number" class="form-control" id="price" name="price" value="<?php echo $tour['price']?>" required>
  </div>

  <div class="mb-3">
    <label for="descrip" class="form-label">Опис туру</label>
    <input name="descrip" id="descrip" type="text" class="form-control" value="<?php echo $tour['descrip']?>" required></input>
  </div>

  <div class="mb-3">
    <label for="image" class="form-label">Фото</label>
    <img src="/upload/<?php echo $tour['image'] ?>" alt="" width="250px">
    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
    <input type="file" class="form-control" id="image" name="image" >
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="1" id="hot" name="hot" <?php echo $retVal = ($tour['hot']) ? "checked" : "";?>>
    <label class="form-check-label" for="hot"> Гарячі тури</label>
  </div>

  <button type="submit" class="btn btn-success"><i class="far fa-save"></i> Save</button>
</form>



<?php
include "partials/footer.php";
?>