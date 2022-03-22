<?php
if (!isset($_GET['page'])){header('Location: ?page=home');}
if(in_array($_GET['page'], array("login", "register")) && isset($_SESSION['role'])){
    iheader('Location: ?page=dashboard'); 
}