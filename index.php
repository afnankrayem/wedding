<?php
session_start();
require_once "model/index.php";
require_once "controller/index.php";

$page = $_GET['page'];

switch($page){
    case 'home':
            // include "view/home.php";
            include "controller/admin/clients.php";
            include "view/admin/dashboard.php";
    break;
    case 'login':
            include "controller/auth/login.php";
            include "view/login.php";
    break;
    case 'register':
            include "controller/auth/register.php";
            include "view/register.php";
    break;
    case 'logout':
            include "controller/auth/logout.php";
    break;
    default:
        $role = $_SESSION['role'] ?? "";
        if($role == "admin"){
            switch($page){
                case 'dashboard':
                    include "view/admin/dashboard.php";
                break;
                case 'clients':
                    include "controller/admin/clients.php";
                    include "view/admin/clients.php";
                break;
                case 'reservations':
                    include "view/admin/reservations.php";
                break;
                case 'services':
                    include "view/admin/services.php";
                break;
                case 'places':
                    include "view/admin/places.php";
                break;
                default:
                    die("Page Not Found");
            }
        }else if ($role == "client"){
            switch($page){
                case 'dashboard':
                    include "view/cient/dashboard.php";
                break;
                case 'reservations':
                    include "view/client/reservations.php";
                break;
                default:
                    die("Page Not Found");
            }
        }else{
            die("Page Not Found");
        }
}
