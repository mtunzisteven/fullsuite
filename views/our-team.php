
<?php 

$pageName="Our Team";
$pageDescription="";
$pageShortSummary="";

?><!DOCTYPE html>
<html lang="en-us">
    <?php

        require $_SERVER['DOCUMENT_ROOT'] .  "/fullsuite/snippets/head.php";
        
    ?>

    <body>
        <div class="wrapper">
            <?php

                    require $_SERVER['DOCUMENT_ROOT'] .  "/fullsuite/snippets/navigation.php";

            ?>
            
            <div class="hero block">
                <div class="block-text-container hero-block-text-container">
                    <div class="block-text">
                        <div class="h11 about">Our Team </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="block">
                    <div class="block-text-container">
                        <div class="block-text">
                            <div class="h11 dark">Title Text </div>
                            <div class="h13 dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                        </div>
                        <div class="block-buttons">
                            <a href='#' class="buttons solid-button">Our Services</a>
                        </div>
                    </div>
                    <div class='block-image-container'>
                        <div class='block-imgback-shape shape1'>&nbsp;</div>
                        <img class='block-top-image' src='/fullsuite/images/phone.jpg' alt='hero image' />
                    </div>
                </div>
            </div>

            <?php 
                
                require $_SERVER['DOCUMENT_ROOT'] .  "/fullsuite/snippets/footer.php"; 
                
            ?> 
        </div>
    </body>
</html>