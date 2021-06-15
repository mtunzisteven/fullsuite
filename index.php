<?php
//This is the main controller for the pages of the website
session_start();

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}

// Only use this code when it is going to be a redirect for a home page's child page's initial request.
if(isset($_SESSION['action']) && $_SESSION['turn']==1){

    $action = $_SESSION['action'];
}

unset($_SESSION['action']);

//echo 'Session action='.$action; exit;

switch ($action){

    case 'about':
        header('Location: /about/');
        break;
    case 'services':
        header('Location: /solutions/'); 
        break;
    case 'pricing':
        header('Location: /our-team/');
        break;
    case 'contact':
        header('Location: /contact-us/');      
        break;
    case 'home':
        
    default:
        include 'views/home.php';
        break;
   }
?>