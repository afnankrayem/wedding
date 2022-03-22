<?php
if(isset($_SESSION['role'])){ header('Location: ?page=dashboard'); }
if($_SERVER['REQUEST_METHOD'] == 'POST'):
    extract($_POST);
    $data = $users->select("*", "WHERE username = '$username' AND password = '$password'");
    if($data->num_rows == 1){
        $data = $data->fetch_array(MYSQLI_ASSOC);
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $data["email"];
            $_SESSION['role'] = $data["role"];
            $_SESSION['phone'] = $data["phone"];
            $_SESSION['user_id'] = $data["id"];
            header('Location: ?page=dashboard');
    }else $error = "username or password are wrong!";

endif;