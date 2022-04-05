<?php
$success = false;
if($_SERVER['REQUEST_METHOD'] == 'POST'):
    extract($_POST);
    if(isset($password) && isset($username) && isset($phone) && isset($email)){
        $data = $users->select("*", "WHERE username = '$username'");
        if($data->num_rows == 0){
            $data = $users->select("*", "WHERE email = '$email'");
            if($data->num_rows == 0){
                $success = $users->insert("NULL, '$username', '$password','$role','$email', '$phone'");
            } else $error = "The email is already exist!";
        }else $error = "The username is already exist!";
    } else $error = "Please verify Inputs!";
endif;
