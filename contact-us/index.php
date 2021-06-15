<?php
session_start();

// Only redirect if this is the initial time this page is requested, otherwise, skip this block and include the page
if(!isset($_SESSION['action']) && ($_SESSION['turn']!=1 || !isset($_SESSION['turn']))){

    $_SESSION['turn'] = 1;
    $_SESSION['action'] = "contact";

    header("Location: ./"); exit;
}

include '../views/contact.php';