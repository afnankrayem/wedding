<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'):
    extract($_POST);
    if(isset($action)){
        switch($action){
            case "create":
                if(isset($password) && isset($username) && isset($phone) && isset($email)){
                    $data = $users->select("*", "WHERE username = '$username'");
                    if($data->num_rows == 0){
                        $data = $users->select("*", "WHERE email = '$email'");
                        if($data->num_rows == 0){
                            $created = $users->insert("NULL, '$username', '$password','$role','$email', '$phone', '-1', current_timestamp()");
                            var_dump($created);
                        } else $error = "The email is already exist!";
                    }else $error = "The username is already exist!";
                } else $error = "Please verify Inputs!";
            break;
            case "update":
                    if(isset($id) && isset($password) && isset($username) && isset($phone) && isset($email)){
                        $data = $users->select("*", "WHERE username = '$username' and id <> '$id'");
                        if($data->num_rows == 0){
                            $data = $users->select("*", "WHERE email = '$email'  and id <> '$id'");
                            if($data->num_rows == 0){
                                $updated = $users->update("NULL, '$username', '$password','$role','$email', '$phone'", "WHERE id = '$id'");
                            } else $error = "The email is already exist!";
                        }else $error = "The username is already exist!";
                    } else $error = "Please verify Inputs!";
            break;
            case "delete":
                if(isset($id)){
                    $deleted = $users->delete("WHERE id = '$id'");
                }
            break;
        }
    }
endif;
