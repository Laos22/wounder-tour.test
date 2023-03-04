<?php
    require($_SERVER['DOCUMENT_ROOT']. '/configs/db.php');
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




    if(!empty($_GET)) {
    var_dump($_GET); 
        $sql = 'DELETE FROM tours WHERE id=' . $_GET["id"];
        if (mysqli_query($conn, $sql)) {
            echo "Данные удаленны";
            header("Location: /admin/posts.php");
        } else {
            echo "Ошибка удаления данных: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>