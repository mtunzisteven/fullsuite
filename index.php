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
    case 'email':

        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING); 
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['message'] = $message;


        if(!(empty($name) || empty($email) || empty($message))){
            // Send the email to the site owner.

            // Message to be sent
            $send = "<table><tr><th>A Website User Submitted a Message</th><th></th></tr>";
            $send .= "<tr><th style='text-align:left'>Name:</th><td>$name</td></tr>";
            $send .= "<tr><th style='text-align:left'>Email:</th><td>$email</td></tr>";
            $send .= "<tr><th style='text-align:left'>Message:</th><td></td></tr>";
            $send .= "<tr><td>$message</td></tr></table>";

            // Header information
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            $headers .= 'From:No Reply<noreply@fullsuitetelecoms.com>' . "\r\n";
            $headers .= 'Reply-To:Info<info@fullsuitetelecoms.com>' . "\r\n";
            $headers .= 'Cc:Sifiso<sifiso@fullsuitetelecoms.com>' . "\r\n";
            $headers .= 'Bcc:Mtunzi<mtunzisteven@gmail.com>' . "\r\n";

            $mailto = "info@fullsuitetelecoms.com";
            $subject = "Website Form Submission";

            $sent = mail($mailto, $subject, $send, $headers);

            if($sent){

                echo "<p class='contact-message'>Your message was submitted successfully. We'll get back to you ASAP.</p>";

            }else{

                echo "<p class='contact-message'>Your message was not submitted. Please try again, and make sure all inforamtion is inserted properly.</p>";
    
            }

        }else{

            echo "<p class='contact-message'>Your message was not submitted. Please try again, and make sure all inforamtion is inserted properly.</p>";

        }

        break;

    case 'home':
        
    default:
        include 'views/home.php';
        break;
   }
?>