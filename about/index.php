<?php
session_start();

// Only redirect if this is the initial time this page is requested, otherwise, skip this blocl and include the page
if(!isset($_SESSION['action']) && ($_SESSION['turn']!=1 || !isset($_SESSION['turn']))){

        $_SESSION['turn'] = 1;
        $_SESSION['action'] = "about";

        header("Location: /.");
}

include '../views/about.php';
