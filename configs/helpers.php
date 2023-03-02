<?php 

// авторизирован ли пользователь
function isLogin() {
    $is_session = isset($_SESSION['user_id']) && $_SESSION['user_id'] != null;
    $is_cookie = isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != null;
    return ($is_cookie || $is_session) ? true : false;
}

// получить текущего пользователя 
function getCurrentUser() {
    global $conn;
    if (isLogin()) {
        if (isset($_SESSION['user_id'])) {
            $sql = "SELECT * FROM users WHERE id = " . $_SESSION['user_id'];
            $result = mysqli_query($conn, $sql); 
            return $result->fetch_assoc();
          } elseif (isset($_COOKIE['user_id'])) {
            $sql = "SELECT * FROM users WHERE id = " . $_COOKIE['user_id'];
            $result = mysqli_query($conn, $sql);
            return $result->fetch_assoc();
          }
    } else {
        return null;
    }
    
}

// получить id текущего юзера
function getCurrentUserID() {
    global $conn;
    if (isLogin()) {
        $user = getCurrentUser();
        return $user['id'];
    } else {
        return 0;
    }
}
// получить имя юзера по ид
function getUserName($id) {
    global $conn;
    $sql = "SELECT * FROM users WHERE id = " . $id;
    $result = mysqli_query($conn, $sql);
    $user = $result->fetch_assoc();
    return $user['username'];

}

// получить все твиты юзера
function getAllTwitsByUser($user) {
    global $conn;
    $sql = "SELECT * FROM posts WHERE user_id=" . $user['id'] . " ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    return $result;
}

// получить все твиты
function getAllTwits() {
    global $conn;
    $sql = "SELECT * FROM posts ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    return $result;
}


?>