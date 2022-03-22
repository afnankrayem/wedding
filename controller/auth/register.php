<?php
if(isset($_SESSION['role'])){ header('Location: ?page=dashboard'); }
if($_SERVER['REQUEST_METHOD'] == 'POST'):
    extract($_POST);
    if($password == $r_password){
        $data = $users->select("*", "WHERE username = '$username'");
        if($data->num_rows == 0){
            $data = $users->select("*", "WHERE email = '$email'");
            if($data->num_rows == 0){
                $users->insert("NULL, '$username', '$password','client','$email', '$phone'");
                $data = $users->select("*", "WHERE username = '$username'");     
                $_SESSION['user_id'] = $data["id"];
                $_SESSION['username'] = $data["username"];
                $_SESSION['email'] = $data["email"];
                $_SESSION['role'] = $data["role"];
                $_SESSION['phone'] = $data["phone"];
                header('Location: ?page=dashboard');
            } else $error = "The email is already exist!";
        }else $error = "The username is already exist!";
    } else $error = "Please verify  password!";
endif;