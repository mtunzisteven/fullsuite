<?php
session_start();
?><!DOCTYPE html>
<html lang="en-us" xmlns="http://www.w3.org/1999/xhtml" >

    <?php  $page = "Email Submit"; 
    
    
    function _htmler($string){
        return htmlentities($string, ENT_QUOTES,'UTF-8',false);
        }


        #Define key variables
        $fields = array();
        $errors = array();
        $mailto = "mtunzisteven@gmail.com";

        #Error alert variables
        $nameError='';
        $phoneError='';
        $emailError='';
        $messageError='';


        #items to be submitted in the form:
        $whitelist = array('name','phone','email','message');



        #Form inputs by the user:
        $user = filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING);
        $phone = filter_input(INPUT_POST, 'phone',FILTER_SANITIZE_NUMBER_INT);
        $mailfrom = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
	$message = filter_input(INPUT_POST, 'message',FILTER_SANITIZE_STRING);
        

        $subject = "Contact Form Submission";

        #Add all white list elements(inputs by name attributes) into field array:
        foreach($whitelist as $key){
		if($key=='email'){

					#Validate the email address entered:
            		$fields[$key] = filter_input(INPUT_POST, $key,FILTER_VALIDATE_EMAIL);

    				if(!$fields[$key]){	
        				$errors[] = "Please enter a valid email address";
    				}
		} 
		else if($key=='phone'){
            		
			$fields[$key] = filter_input(INPUT_POST, $key,FILTER_SANITIZE_NUMBER_INT);
		} 
		else{

			$fields[$key] = filter_input(INPUT_POST, $key,FILTER_SANITIZE_STRING);
		}
        
        }
    
    if(isset($_POST['submit'])){

        #Check that all fields have been entered:
        foreach($fields as $field => $data){
        
        if(empty($data)){
            
        $errors[] = "Please enter your ".$field;
            
        switch($field){

            case 'name':
            $nameError = "Please enter your ".$field;
            break;

            case 'phone':
            $phoneError  = "Please enter your ".$field;
            break;

            case 'email':
            $emailError = "Please enter your ".$field;
            break;

            case 'message':
            $messageError = "Please enter your ".$field;
            break;

            default:
            break;			
        }
        
        }
        
        }

    $send = $fields['name']."<br/>".$fields['phone']."<br/>".$fields['email']."<br/>"."Message:<br/>".$fields['message'];

        if(isset($_POST['g-recaptcha-response'])){
        $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
        $reCaptureError = "We couldn't verify your submission ".$user.". Please check the reCatcha box below.";
        }
        
    $secretKey = "6Lc-H7sZAAAAADMIW4Dy-FeXbW8Rd0LR6ARToyHB";
    $ip = $_SERVER['REMOTE_ADDR'];
    // post request to server
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
    $response = file_get_contents($url);
    $responseKeys = json_decode($response,true);
    // should return JSON with success as true
    if($responseKeys["success"]) {

        //Setup the SMTP server settings !
        //INI Setup not needed on Linux when sendmail or postfix is installed
        //mail DOES not support AUTH - USE ONLY WITH OPEN RELAY
        ini_set("SMTP", "smtp.mediafrika.co.za");
        ini_set("smtp_port", 465);
        ini_set("sendmail_from", "info@mediafrika.co.za");

        //DO NOT WASTE TIME SETTING THESE BELOW FOR AUTH - JUST USE PHP MAILER
        /*
        auth_username = username 
        auth_password = password 
        OR
        username = username 
        password = password 
        */

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $headers .= 'From:No Reply<noreply@mediafrika.co.za>' . "\r\n";
        $headers .= 'Reply-To:Info<info@mediafrika.co.za>' . "\r\n";
        $headers .= 'Cc:Mtunzi<mtunzi@mediafrika.co.za>' . "\r\n";

        #Send the email if the are no errors:
        if(empty($errors)){
            $sent = mail($mailto, $subject, $send, $headers);

            if($sent){
                $nameError='';
                $phoneError='';
                $emailError='';
                unset($fields);

                #doubles as a submission message as well
                $_SESSION['successMessage']='Form submitted. Thank you for your submission '.$_SESSION['name'];

            }
        }

    } 

    }#If submit is set closure.

    ?>

    <head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173492477-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-173492477-1');
    </script>
        
        <meta charset="UTF-8">
                <!-- Primary Meta Tags -->
        <title><?php echo $page ?></title>
        <meta name="title" content="<?php echo $page ?>">
        <meta name="description" content="MEDIAFRIKA uses digital marketing to enhance your ability to reach and engage customers. Let us help you market your brand!">
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://mediafrika.co.za/<?php echo $page ?>">
        <meta property="og:title" content="<?php echo $page ?> | We Are Your Online Marketing Solution">
        <meta property="og:description" content="MEDIAFRIKA uses digital marketing to enhance your ability to reach and engage customers. Let us help you market your brand!">
        <meta property="og:image" itemprop="image" content="http://mediafrika.co.za/preview.jpg">
        
        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://mediafrika.co.za/<?php echo $page ?>">
        <meta property="twitter:title" content="<?php echo $page ?> | We Are Your Online Marketing Solution">
        <meta property="twitter:description" content="MEDIAFRIKA uses digital marketing to enhance your ability to reach and engage customers. Let us help you market your brand!">
        <meta property="twitter:image" content="https://mediafrika.co.za/preview.jpg"> 
                
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta property="og:image" content="../images/logo.png" />
        <meta name="keywords" content="Software Developer, Website, Web Developer, World Wide Web, Web development, Web design, Software, Design, Information technology, Designer, Application software, Front-end web development, Internship, Software development, Freelancer, Web development tools, Web application, Career portfolio, Web application development, Microsoft Corporation, Solution stack, Career portfolio, Solution stack, Technology, Python, Information and Communications Technology, back end, Software Testing, Software Engineer, Search engine optimization, Technology roadmap, Progressive Web Apps, Publishing, User interface, Google Web Designer, Database Administrator, Front-end web development, Freelancer, Designer, Software Developer, Website, Web design, Web design, Designer, Website, Design, Google Web Designer, World Wide Web, Software Developer, Graphics, Graphic design, Web Developer,  Software, Graphic designer, Freelancer, Software development, Advertising, HTML, Template, Web page, Web development, Career portfolio, Uniform Resource Locator, Social media, Media, Social media marketing, Marketing, Digital marketing, Management, Advertising agency, Business, Brand, Advertising, social media manager, Company, Strategy, Government agency, Employment agency, Recruitment, Contemplation, Influencer marketing, Service, Management, Advertising agency, Brand, Advertising, social media manager, Strategy, Government agency, Influencer marketing, Service, Media, Social media, social media manager, Job, Marketing, Digital marketing, Skill, Online community manager, Designer, Content, Social media marketing, advertising, Duty, Digital media, Community, Brand, Management, Brand management, Graphics, Marketing management, communication, Digital marketing, Designer, Digital media, Brand, Brand management, Graphics, Marketing management, Communication, Business manager, Question, Writing, Interview, Graphic design, Role, Freelancer, Editing" />
        <link rel="icon" href="https://mediafrika.co.za/images/ico.ico" type="image/ico">
        <link href="../css/styles.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="color-gradient"><br/>
        <div class="form-column dev-form-column">
            <form class="devforms" method="post" action="/">
                <div class="cancel"><a href='../?action=home'>&#9587;</a></div>
                <h4 class="legendary-top" >Thank You <?php echo $user ."!"; ?></h4>
                
                <p class="legendary-top" >Your message was submitted successfully</p>

                <input type="submit" class="button contact-button no-outline devbutton" value="Close" />
                <input type="hidden" name="action" value="home" />
                <?php $_SESSION['turn']==1 ?>
                
            </form>     
        </div>
    </body>
</html>